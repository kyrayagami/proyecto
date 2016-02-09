<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHorariosInternetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios_internet', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('dia_id')->unsigned();
            $table->integer('programa_id')->unsigned();
            $table->time('hora_inicio');
            $table->time('hora_termino');
            $table->text('tipo');
            $table->text('descripcion');            
            $table->text('tipo_audiencia');
            $table->foreign('dia_id')->references('id')->on('dias');
            $table->foreign('programa_id')->references('id')->on('programas');
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
        Schema::drop('horarios_internet');
    }
}
