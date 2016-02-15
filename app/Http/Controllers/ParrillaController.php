<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Horario;
use App\Dia;

class ParrillaController extends Controller
{
    //
    public function index(){

    }
    public function edit($dia)
    {
        if($dia!='0')
        {
            $L= Horario::orderBy('hora_inicio','ASC')->where('dia_id',$dia)->get();                
        } 
        else{
            //$dia = date('w');
            if($dia=='0')
                $dia=7;
            $L= Horario::orderBy('hora_inicio','ASC')->where('dia_id','=',$dia)->get();                       
        }
            switch($dia) {
            case 7: $dia = "Domingo";
            break;
            case 1: $dia = "Lunes";
            break;
            case 2: $dia = "Martes";
            break;
            case 3: $dia = "Miercoles";
            break;
            case 4: $dia = "Jueves";
            break;
            case 5: $dia = "Viernes";
            break;
            case 6: $dia = "Sabado";
            break;
            }                           
        return view('admin.parrilla.index')->with('L',$L)->with('dia',$dia);          
    }
}