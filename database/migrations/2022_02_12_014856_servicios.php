<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Servicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->integer('cantidadhoras');
            $table->string('horainicio');
            $table->string('horatermino');
            $table->text('descripcion');
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
        Schema::dropIfExists('servicios', function (Blueprint $table) {

            $table->dropSoftDeletes(); //add this line
        });
    }
}
