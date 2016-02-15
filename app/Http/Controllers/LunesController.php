<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Horario;
use App\Dia;

class LunesController extends Controller
{
    public function index($dia)
    {
        if($dia!=0)
        {
            $L= Horario::orderBy('hora_inicio','ASC')->where('dia_id','=',$dia)->get();    
        } 
        else{
            $dia = date('w');
            if($dia==0)
                $dia=7;
            $L= Horario::orderBy('hora_inicio','ASC')->where('dia_id','=',$dia)->get();    
        }               	
        //dd($horarios->count());    
    	return view('admin.lunes.index')
            ->with('L',$L)->with('dia',$dia);
          
    }
}
