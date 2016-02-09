<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Categoria;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->delete();
        Categoria::create(array('id' => '2','nombre' => 'Musica'));
        Categoria::create(array('id' => '4','nombre' => 'Social'));
        Categoria::create(array('id' => '5','nombre' => 'Politico'));        
        Categoria::create(array('id' => '7','nombre' => 'Entretenimiento'));
        Categoria::create(array('id' => '8','nombre' => 'Noticiero'));
        Categoria::create(array('id' => '9','nombre' => 'Deporte'));
        Categoria::create(array('id' => '10','nombre' => 'Infantil'));
        Categoria::create(array('id' => '11','nombre' => 'Documental'));
        Categoria::create(array('id' => '14','nombre' => 'Sociales'));
        Categoria::create(array('id' => '15','nombre' => 'Revista'));
        Categoria::create(array('id' => '16','nombre' => 'Cultura'));
        Categoria::create(array('id' => '17','nombre' => 'Tecnologia'));
        Categoria::create(array('id' => '18','nombre' => 'Educativo'));
    }
}
