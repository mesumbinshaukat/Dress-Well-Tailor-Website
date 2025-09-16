<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePantShirtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pant_shirts', function (Blueprint $table) {
            $table->id();
            $table->string('coustmer_name');
            $table->enum('category', ['pant','shirt','pant & shirt'])->nullable();
            $table->string('quantity')->nullable();
            // Shirt measurements
            $table->string('shirt_length')->nullable();
            $table->string('chest')->nullable();
            $table->string('waist')->nullable();
            $table->string('shoulder')->nullable();
            $table->string('sleeve')->nullable();
            $table->string('arm')->nullable();
            $table->string('neck')->nullable();
            $table->enum('collar', ['regular','button_down','spread','cutaway'])->nullable();
            $table->string('cuff')->nullable();
            $table->enum('shirt_pocket', ['no','1','2'])->nullable();
            $table->enum('shirt_fitting', ['slim','regular','loose'])->nullable();
            // Pant measurements
            $table->string('pant_length')->nullable();
            $table->string('pant_waist')->nullable();
            $table->string('hip')->nullable();
            $table->string('thigh')->nullable();
            $table->string('knee')->nullable();
            $table->string('bottom')->nullable();
            $table->enum('pant_pocket', ['no','side','back','both'])->nullable();
            $table->enum('pant_fitting', ['slim','regular','loose'])->nullable();
            $table->enum('belt_loop', ['no','yes'])->nullable();
            $table->enum('zipper', ['front','side'])->nullable();
            // Common fields
            $table->string('textarea')->nullable();
            $table->date('trail_date')->nullable();
            $table->date('delivery_date');
            $table->string('advance')->nullable();
            $table->string('total_amount');
            $table->string('coustmer_contact');
            $table->string('coustmer_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pant_shirts');
    }
}
