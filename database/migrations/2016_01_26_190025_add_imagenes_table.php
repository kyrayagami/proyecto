<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->increments('id_imagen');
            $table->string('alt');
            $table->text('url');
            $table->string('metatags');
            $table->timestamps();
        });

        // tabla pivote para ConductorImagen
        Schema::create('conductor_imagen', function (Blueprint $table){
            $table->increments('id');
            $table->integer('conductor_id')->unsigned();
            $table->integer('imagen_id')->unsigned();
            $table->timestamps();
        });
        // tabla pivote para ProductorImagen
        Schema::create('productor_imagen',function (Blueprint $table){
            $table->increments('id');
            $table->integer('productor_id')->unsigned();
            $table->integer('imagen_id')->unsigned();
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
        Schema::drop('imagenes');
    }
}
