<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Serviciocategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviciocategorias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idCategoria')->unsigned();
            $table->foreign('idCategoria')->references('id')->on('categorias');
            $table->bigInteger('idServicio')->unsigned();
            $table->foreign('idServicio')->references('id')->on('servicios');
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
        Schema::dropIfExists('serviciocategorias');
    }
}
