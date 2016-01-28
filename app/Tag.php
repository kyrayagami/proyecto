<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $table = "tags";
    protected $fillable = [ 'nombre'];

    public function programas()
    {
    	return $this->belongsToMany('App\Programa')->withTimestamps();
    }
}
