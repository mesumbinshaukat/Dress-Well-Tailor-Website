<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShirtFieldsToCoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coats', function (Blueprint $table) {
            // Add missing shirt fields from pantshirts
            $table->decimal('collar_size', 5, 1)->nullable()->after('collar');
            $table->enum('shirt_fitting', ['slim', 'regular', 'loose'])->nullable()->after('shirt_pocket');
            $table->decimal('shirt_fitting_size', 5, 1)->nullable()->after('shirt_fitting');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coats', function (Blueprint $table) {
            $table->dropColumn(['collar_size', 'shirt_fitting', 'shirt_fitting_size']);
        });
    }
}
