<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;
use App\Horario;
use App\Dia;
use App\Programa;

class HorarioPDFController extends Controller
{
    public function index(){
    	$horarios= Horario::orderBy('dia_id','ASC')->orderBy('hora_inicio','ASC')->get();
        $dia=1;
        $i=0;
        $j=0;
        $mayor=0;
        $pos=0;
        $cont=0;
        $array1='';
        $entro=0;
        foreach ($horarios as $horario) {
            if($horario->dia_id!=$dia){
                $dia=$horario->dia_id;
                $i=0;
                $j++;
                $cont=0;
                //$aux=$cont+100000;
            }
            //$lim=235959;            
            $aux=$cont+10000;
            while($entro==0){
                $hora=str_replace(":", "",$horario->hora_inicio);
                if($hora>=$cont && $hora<$aux){
                    $array1[$i][$j]='<td>'
                        .$horario->dia_id.'&nbsp'.$horario->programa->nombre.
                        '<br>'.$horario->hora_inicio.
                        '<br>'.$horario->hora_termino.
                        '<br>'.$cont.
                        '</td>';
                    $cont=$cont+10000;
                    $entro=1;
                }else{
                    $array1[$i][$j]='<td>vacio</td>';
                    $cont=$cont+10000;
                    $aux=$cont+10000;                    
                }                
                $i++;
            }
            $entro=0;            
            //$i++;
            if($i>$mayor)
                $mayor=$i;
        }            
        $aux=10;
        $array2='';
        for ($i=0; $i < $mayor; $i++) { 
            $array2[$i]='<tr>';
            for ($j=0; $j < 2; $j++) {          
                /*
                if(empty($array1[$i][$j]))
                {
                    $array2[$i].='<td></td>';
                }
                else{
                    $array2[$i].=$array1[$i][$j];
                }*/
                $array2[$i].=$array1[$i][$j];
            /*if(count($array1[$i])>$aux)
                $mayor=$array1[$i][$j];
            */
            }
            $array2[$i].='</tr>';       
        }
    //return $array2;
    	return view('admin.horario_pdf.index')->with('contenido',$array2);
    }
}
