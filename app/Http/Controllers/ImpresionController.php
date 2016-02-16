<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Vsmoraes\Pdf\Pdf;
use App\Horario;
use App\Dia;
use App\Programa;

class ImpresionController extends Controller
{
    private $pdf;

    public function __construct(Pdf $pdf)
    {
        $this->pdf = $pdf;
    }

    public function index()    
    {
        $horarios= Horario::orderBy('hora_inicio','ASC')->orderBy('dia_id','ASC')->get();
        $filas='';
        $contenido='<html><style>table {font-size: 30;}  td{ height: 30;}</style>
        <table id="thorario" style="width:100% height:100%" cellpadding="0" cellspacing="0" border="1">          
          <thead>
            <tr>
              <th>Hora</th>
              <th>Lunes</th>                    
              <th>Martes</th>                  
              <th>Miercoles</th>
              <th>Jueves</th>
              <th>Viernes</th>
              <th>Sabado</th>
              <th>Domingo</th>
            </tr> 
          </thead>              
          <tbody id="lis_horario">';


         //$contenido='';                    
            $dia=1;
            $inicio=0;
            $termino=$inicio+10000;
            $hora=0;
            $filas=1;
            $tipo="";
            $tipo_hora="am";
            $contenido.='<tr> <td rowspan="2" align="center" height="50"> 12:00 am</td>';
              foreach ($horarios as $horario){              
                $h_ini=str_replace(":","",$horario->hora_inicio);
                $h_end=str_replace(":","",$horario->hora_termino);
                if($horario->tipo == "vivo") $tipo = "V";
                if($horario->tipo == "estelar") $tipo = "E";
                if($horario->tipo == "repeticion") $tipo = "R";                
                if($dia==7)
                {
                  $contenido.= '</tr> <tr>';
                }                  
                if($h_ini<$termino){                
                /*while ($horario->dia_id>$dia){                    
                    echo "<td>vacio </td>";
                    $dia++;
                  }*/
                  if($h_end>=$termino){
                    $filas++;
                  }
                  $contenido.= '<td rowspan="'.$filas.'" align="center" >'.$horario->programa->nombre. '  ('.$tipo.')</td>';
                  $dia=$horario->dia_id;
                  $filas=1;
                }
                else{
                  $hora++;
                  if($hora==12){
                    $tipo_hora='pm';                    
                  }
                  if($hora>12)
                    $hora=1;                  
                  $contenido.= '</tr> <tr> <td rowspan="2" align="center" height="50"> '.$hora.':00 '.$tipo_hora.'</td>';
                  $filas=1; $dia=1;
                  $inicio=$inicio+10000;
                  $termino=$inicio+10000;
                  if($h_ini<$termino){                    
                    if($h_end>=$termino){
                      $filas++;
                    }
                    $contenido.= '<td rowspan="'.$filas.'" align="center">'.$horario->programa->nombre.'  ('.$tipo.')</td>';
                  }
                }
              }
        $contenido.='</tbody></table>';
        //$html = view('admin.impresion.index')->render();
        //$contenido='http://localhost:8000/admin/horario_pdf';

        //$html = '<html><body>'. $contenido. '</body></html>';
        $html =''.$contenido;
        //$html=$html->render();
        /*
         $this->pdf->filename('my_pdf.pdf');               
        $this->pdf->setPaper('A4','portrait');
        */
        //$this->pdf->setPaper('A4','landscape');
        $this->pdf->load($html);
        $this->pdf->filename('Horarios_Canal_10.pdf');
        $this->pdf->setPaper('A0','landscape');
        return $this->pdf->show(); // 顯示
        //return $this->pdf->download(); // 下載
        //return $this->pdf->load($html)->show();
    }   
}
