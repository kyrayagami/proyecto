<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $table = "conductores";
    protected $fillable = [ 'nombre','correo','estatus','perfil','imagen_url'];

    public function conductor()
    {
    	return $this->hasMany('App\Programa');
    }
}
