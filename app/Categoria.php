<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";
    protected $fillable = ["nombre"];

    public function programas()
    {
    	return $this->hasMany('App\Programa');
    }
}
