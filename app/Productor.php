<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productor extends Model
{
    protected $table = "productores";
    protected $fillable = [ 'nombre','correo','estatus','perfil','imagen_url'];

    public function programa()
    {
    	return $this->hasMany('App\Programa');
    }

    public function scopeSearch($query, $nombre)
    {
        return $query->where('nombre','LIKE',"%$nombre%");
    }
}
