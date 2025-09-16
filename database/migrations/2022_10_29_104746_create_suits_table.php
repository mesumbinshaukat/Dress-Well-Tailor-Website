<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suits', function (Blueprint $table) {
            $table->id();
            $table->string('coustmer_name');
            $table->enum('category', ['coat/pent','coat', 'pent'])->nullable();
            $table->string('quantity')->nullable();
            $table->string('length')->nullable();
            $table->string('chest')->nullable();
            $table->string('waist')->nullable();
            $table->string('hip')->nullable();
            $table->string('shoulder')->nullable();
            $table->string('sleeve')->nullable();
            $table->string('cross_back')->nullable();
            $table->enum('bress', ['nothing','single', 'double'])->nullable();
            $table->enum('kaj', ['nothing','1', '2'])->nullable();
            $table->enum('daman', ['nothing','round', 'square'])->nullable();
            $table->enum('chaak', ['nothing','side_chaak', 'back_chaak'])->nullable();
            $table->string('bress_nepal')->nullable();
            $table->string('pent_length')->nullable();
            $table->string('pent_inside')->nullable();
            $table->string('pent_fly')->nullable();
            $table->string('pent_waist')->nullable();
            $table->string('pent_hip')->nullable();
            $table->string('pent_thai')->nullable();
            $table->string('pent_knee')->nullable();
            $table->string('pent_bottom')->nullable();
            $table->enum('pocket', ['nothing','cross', 'straight'])->nullable();
            $table->enum('loops', ['4','5','6','8','10'])->nullable();
            $table->enum('hip_pocket', ['nothing','1', '2'])->nullable();
            $table->enum('s_bottom', ['nothing','turpai', 'slai','folding'])->nullable();
            $table->string('french_fly')->nullable();
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
        Schema::dropIfExists('suits');
    }
}
