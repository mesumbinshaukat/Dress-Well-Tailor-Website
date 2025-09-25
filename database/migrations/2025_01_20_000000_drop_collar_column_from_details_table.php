<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropCollarColumnFromDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('details', function (Blueprint $table) {
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
        Schema::table('details', function (Blueprint $table) {
            // Re-add the collar column if rollback is needed
            $table->enum('collar', ['nothing','shirt_collar','sherwani_collar'])->nullable()->after('fitting');
        });
    }
}
