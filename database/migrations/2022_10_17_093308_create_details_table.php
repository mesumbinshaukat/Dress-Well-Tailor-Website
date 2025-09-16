<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('coustmer_name');
            $table->enum('category', ['kameez/shalwar','kameez', 'shalwar'])->nullable();
            $table->string('quantity')->nullable();
            $table->string('length')->nullable();
            $table->string('chest')->nullable();
            $table->string('waist')->nullable();
            $table->enum('asteen', ['kurta_asteen','kuff_asteen'])->nullable();
            $table->string('hip')->nullable();
            $table->enum('side_pocket', ['no','1','2'])->nullable();
            $table->string('shoulder')->nullable();
            $table->enum('front_pocket', ['no','1','2'])->nullable();
            $table->string('sleeve')->nullable();
            $table->string('arm')->nullable();
            $table->string('neck')->nullable();
            $table->string('fitting')->nullable();
            $table->enum('collar', ['nothing','shirt_collar','sherwani_collar'])->nullable();
            $table->string('kuff')->nullable();
            $table->string('patti')->nullable();
            $table->enum('daman', ['nothing','round', 'square'])->nullable();
            $table->string('shalwar_length')->nullable();
            $table->enum('pajama', ['no','pajama','pent_pajama'])->nullable();
            $table->string('shalwar_pauncha')->nullable();
            $table->enum('pocket', ['no','yes'])->nullable();
            $table->string('shalwar_gair')->nullable();
            $table->enum('lastic', ['no','yes'])->nullable();
            $table->string('asan')->nullable();
            $table->string('shalwar_zip')->nullable();
            $table->string('textarea')->nullable();
            $table->date('trail_date')->format('d/m/Y')->nullable();
            $table->date('delivery_date')->format('d/m/Y');
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
        Schema::dropIfExists('details');
    }
}
