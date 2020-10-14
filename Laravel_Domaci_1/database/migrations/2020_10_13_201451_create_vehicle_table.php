<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('proizvodjac');
            $table->string('model');
            $table->integer('godina_proizvodnje');
            $table->string('registarske_oznake')->nullable();
            $table->integer('broj_vrata');
            $table->string('boja');
            $table->string('tip_pogonskog_goriva');
            $table->float('zapremina_motora')->nullable();
            $table->float('snaga_motora')->nullable();
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
        Schema::dropIfExists('vozila');
    }
}
