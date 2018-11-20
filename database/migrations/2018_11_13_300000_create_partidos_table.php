<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partido', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion',80);
            $table->dateTime('fecha_hora')->nullable();
            $table->string('lugar',50);
            $table->integer('score_local')->nullable();
            $table->integer('score_visitante')->nullable();
            $table->unsignedInteger('id_local');
            $table->foreign('id_local')->references('id')->on('equipo');
            $table->unsignedInteger('id_visitante');
            $table->foreign('id_visitante')->references('id')->on('equipo');
            $table->char('estado',1)->default('1');
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
        Schema::dropIfExists('partido');
    }
}
