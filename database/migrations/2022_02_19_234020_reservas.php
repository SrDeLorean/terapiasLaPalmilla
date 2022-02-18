<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('inicio');
            $table->string('termino');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('email');
            $table->boolean('estado');
            $table->string('nota');
            $table->bigInteger('tiporeserva')->unsigned();
            $table->foreign('tiporeserva')->references('id')->on('tiporeservas');
            $table->bigInteger('estadoreserva')->unsigned();
            $table->foreign('estadoreserva')->references('id')->on('estadoreservas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas', function (Blueprint $table) {

            $table->dropSoftDeletes(); //add this line
        });
    }
}
