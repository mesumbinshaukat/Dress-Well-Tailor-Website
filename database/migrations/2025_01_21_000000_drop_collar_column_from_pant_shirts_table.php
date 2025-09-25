<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropCollarColumnFromPantShirtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pant_shirts', function (Blueprint $table) {
            // Drop the old collar column since we now use collar_size
            $table->dropColumn('collar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pant_shirts', function (Blueprint $table) {
            // Re-add the collar column if rollback is needed
            $table->enum('collar', ['regular','button_down','spread','cutaway'])->nullable()->after('neck');
        });
    }
}
