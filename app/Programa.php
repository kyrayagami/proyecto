<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = "programas";
    protected $fillable = ['nombre','estatus','descripcion','logo','img_tema','img_slider','descripcion_slider','historia','categoria_id','productor_id','conductor_id'];
}
