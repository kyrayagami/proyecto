<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = "programas";
    protected $fillable = ['nombre',
    	'estatus',
    	'descripcion_breve',
    	'logo',
    	'img_programa',
    	'img_slider',
    	'slogan_slider',
    	'sipnosis',
    	'categoria_id',
    	'productor_id'];

    public function categoria()       
    {
        return $this->belongsTo('App\Categoria');
    }  
    public function conductores()  
    {
        return $this->belongsToMany('App\Conductor');
    }
    public function productor()
    {
        return $this->belongsTo('App\Productor');
    }
    public function horario()
    {
        return $this->hasMany('App\Horario');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

     public function scopeSearch($query, $nombre)
    {
        return $query->where('nombre','LIKE',"%$nombre%");
    }
}
