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
            $table->increments('id');
            $table->string('nombre');            
            $table->string('estatus');
            $table->string('descripcion_breve');
            $table->string('logo');
            $table->string('img_programa');
            $table->string('img_app');
            $table->string('img_slider');
            $table->string('slogan_slider');
            $table->text('sipnosis');            
            $table->integer('categoria_id')->unsigned();
            $table->integer('productor_id')->unsigned();            

            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('productor_id')->references('id')->on('productores');
            $table->timestamps();
        });
        Schema::create('conductor_programa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('conductor_id')->unsigned();
            $table->integer('programa_id')->unsigned();

            $table->foreign('conductor_id')->references('id')->on('conductores')->onDelete('cascade');
            $table->foreign('programa_id')->references('id')->on('programas')->onDelete('cascade');

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
        Schema::drop('conductor_programa');
        Schema::drop('programas');
    }
}
