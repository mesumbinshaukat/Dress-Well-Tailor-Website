<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coats', function (Blueprint $table) {
            $table->id();
            $table->string('coustmer_name');
            $table->enum('category', ['shirt/waistcoat','shirt', 'waistcoat'])->nullable();
            $table->string('quantity')->nullable();
            $table->string('length')->nullable();
            $table->string('chest')->nullable();
            $table->string('waist')->nullable();
            $table->string('hip')->nullable();
            $table->string('shoulder')->nullable();
            $table->string('sleeve')->nullable();
            $table->string('arm')->nullable();
            $table->string('neck')->nullable();
            $table->string('Kuffs')->nullable();
            $table->enum('kuff', ['nothing','single', 'double'])->nullable();
            $table->enum('collar', ['nothing','shirt_collar','sherwani_collar'])->nullable();
            $table->enum('patti', ['nothing','simple_patti','polo_patti'])->nullable();
            $table->enum('daman', ['nothing','round', 'square'])->nullable();
            $table->enum('shirt_pocket', ['nothing','simple', 'flape'])->nullable();
            $table->enum('pocket', ['nothing','1', '2'])->nullable();
            $table->string('coat_length')->nullable();
            $table->string('coat_chest')->nullable();
            $table->string('coat_waist')->nullable();
            $table->string('coat_hip')->nullable();
            $table->string('coat_shoulder')->nullable();
            $table->string('coat_neck')->nullable();
            $table->string('cross_back')->nullable();
            $table->enum('cot_collar', ['nothing','sherwani_collar','v_gala','gol_gala'])->nullable();
            $table->enum('wal_pocket', ['nothing','1','2','3'])->nullable();
            $table->string('side_choke')->nullable();
            $table->enum('coat_daman', ['nothing','round', 'square'])->nullable();
            $table->enum('ins_pocket', ['nothing','1','2'])->nullable();
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
        Schema::dropIfExists('coats');
    }
}
            // $table->enum('lastic', ['no','yes'])->nullable();
            // $table->enum('front_pocket', ['no','1','2'])->nullable();