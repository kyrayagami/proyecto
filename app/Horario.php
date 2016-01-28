<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = "horarios";
    protected $fillable = [ 'dia_id',
    	'programa_id',
    	'hora_inicio',
    	'hora_termino',
    	'tipo',
    	'descripcion',
    	'tipo_audiencia'];
    public function programa()
    {
    	return $this->belongsTo('App\Programa');
    }

    public function dia()
    {
    	return $this->belongsTo('App\Dia');
    }
}
