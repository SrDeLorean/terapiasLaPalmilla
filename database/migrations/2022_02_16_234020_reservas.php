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
            $table->date('fecha');
            $table->bigInteger('idCategoria')->unsigned();
            $table->foreign('idCategoria')->references('id')->on('categorias');
            $table->bigInteger('idServicio')->unsigned();
            $table->foreign('idServicio')->references('id')->on('servicios');
            $table->bigInteger('idHorario')->unsigned();
            $table->foreign('idHorario')->references('id')->on('horarios');
            $table->string('nombre');
            $table->string('correo');
            $table->string('telefono');
            $table->integer('precio');
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
