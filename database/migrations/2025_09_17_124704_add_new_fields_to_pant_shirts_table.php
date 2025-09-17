<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToPantShirtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pant_shirts', function (Blueprint $table) {
            $table->decimal('collar_size', 5, 2)->nullable();
            $table->decimal('shirt_fitting_size', 5, 2)->nullable();
            $table->decimal('pant_pocket_size', 5, 2)->nullable();
            $table->decimal('pant_fitting_measurement', 5, 2)->nullable();
            $table->string('belt_loop', 10)->nullable()->change();
            $table->dropColumn('zipper');
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
            $table->dropColumn(['collar_size', 'shirt_fitting_size', 'pant_pocket_size', 'pant_fitting_measurement']);
            $table->string('zipper')->nullable();
            // Note: belt_loop change reversal would need to be handled manually if needed
        });
    }
}
