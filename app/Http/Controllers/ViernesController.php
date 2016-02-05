<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Horario;
use App\Dia;

class ViernesController extends Controller
{
       public function index()
    {
    	$L= Horario::orderBy('hora_inicio','ASC')->where('dia_id','=','1')->get();
        $M= Horario::orderBy('hora_inicio','ASC')->where('dia_id','=','2')->get();
        $Mi= Horario::orderBy('hora_inicio','ASC')->where('dia_id','=','3')->get();
        $J = Horario::orderBy('hora_inicio','ASC')->where('dia_id','=','4')->get();
        $V= Horario::orderBy('hora_inicio','ASC')->where('dia_id','=','5')->get();
        $S= Horario::orderBy('hora_inicio','ASC')->where('dia_id','=','6')->get();
        $D= Horario::orderBy('hora_inicio','ASC')->where('dia_id','=','7')->get();
        //dd($horarios->count());    
    	return view('admin.viernes.index')
            ->with('L',$L)
            ->with('M',$M)
            ->with('Mi',$Mi)
            ->with('J',$J)
            ->with('V',$V)
            ->with('S',$S)
            ->with('D',$D);    	
    }
}
