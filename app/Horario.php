<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = "horarios";
    protected $fillable = [ 'dia_id','programa_id','hora_inicio','hora_termino','tipo','descripcion','imagen'];
}
