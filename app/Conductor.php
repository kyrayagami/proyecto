<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $table = "conductores";
    protected $fillable = [ 'nombre','correo','estatus','perfil'];

    public function conductor()
    {
    	return $this->belongsToMany('App\Programa');
    }
}
