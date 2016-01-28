<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productor extends Model
{
    protected $table = "productores";
    protected $fillable = [ 'nombre','correo','estatus','perfil'];

    public function programa()
    {
    	return $this->hasMany('App\Programa');
    }
}
