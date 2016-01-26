<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->increments('id_programa');
            $table->string('nombre');            
            $table->string('estatus');
            $table->string('descripcion');
            $table->string('logo');
            $table->string('img_programa_anterior');
            $table->string('img_slider');
            $table->string('descripcion_slider',60);
            $table->text('historia');
            $table->integer('categoria_id')->unsigned();
            $table->integer('productor_id')->unsigned();
            $table->integer('conductor_id')->unsigned();

            $table->foreign('categoria_id')->references('id_categoria')->on('categorias');
            $table->foreign('productor_id')->references('id_productor')->on('productores');
            $table->foreign('conductor_id')->references('id_conductor')->on('conductores');

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
        Schema::drop('programas');
    }
}
