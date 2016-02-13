<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Horario;
use App\Programa;
use App\Dia;


class SheduleController extends Controller
{
    protected $layout = 'master';

    public function allPrograms(){

    	 $program = $this->recentProgram();
    	 $programas = $this->getAllProgram($this->getHorarios($this->getHora()->id_hora));
         $horarios =  $this->getHorarios($this->getHora()->id_hora);
         $horas = $this->getAllProgramHoras($this->getHorarios($this->getHora()->id_hora));
         $this->layout->content = View::make('index', array('program' => $program, 'programas' => $programas,'horarios' => $horarios,'horas'=> $horas));
    }


    public function dayPrograms($dia){

         $horarios = $this->getHorariosDia($dia);
         $programas = $this->getAllProgram($horarios);
         $horas = $this->getAllProgramHoras($horarios);
         $this->layout->content = View::make('dia', array('programas' => $programas,'horarios' => $horarios,'horas'=> $horas));
    }

    public function estasViendo(){

       $program = $this->recentProgram();
        return  array('program' => $program);
    }

    public function acontinuacion(){
       $programas = $this->getAllProgramService($this->getHorarios($this->getHora()->id_hora));
        return array('programas' => $programas);
    }

    public function allProgramsServcice(){
    	$programs = $this->getAllPrograms();
    	return Response::json(array('programs' => $programs))->setCallback(Input::get('callback'));
    }

    public function programSchedulleService($program,$day){
    	$schedulle = $this->getProgramService($program,$day);
    	return  Response::json($schedulle)->setCallback(Input::get('callback'));
    }

    public function programsPerDayService($day){
   	//$programs = $this->GetPrograms($day);
   	$programs_ids = $this->GetProgramsByDay($day);
   	return  Response::json($programs_ids)->setCallback(Input::get('callback'));
   }

    public function contentPrograms(){
    $programas = $this->GetContentPrograms();
    return $programas;
   }

   public function schedullerPerProgram($id){
   $horarios =  $this->GetHoraiosByProgrma($id);
   return $horarios;
   }

   /////////////////////////////////////////////Metodos Privados////////////////


    private function GetContentPrograms(){
    	$programas = DB::table('programas')
                    ->where('estatus','ACTIVO')
                    ->get();
        return $programas;

    }


    private function getHorario($hora)
    {
	  $dia=date('w');
    if($dia == '0')
    {
      $dia='7';
    }
	  $horario = DB::table('horarios')
                    ->where('id_dia', $dia)
                    ->where('id_hora_inicio',$hora)
                    ->first();
	   return $horario;    
    }


    private function getHorarios($hora)
    {
	  $dia=date('w');
    if ($dia == '0') {
      $dia='7';
      # code...
    }

	  $horarios = DB::table('horarios')
                    ->where('id_dia', $dia)
                    ->where('id_hora_inicio','>=',$hora)
                    ->groupBy('id_programa')
                    ->orderBy('id_hora_inicio', 'asc')
                    ->get();
	   return $horarios;    
    }

    private function getHora()
    {
      $h = idate('i');
 	  $hr_mx = strtotime(date("H:i", strtotime(date("H:i", time()))));
	  if ($h < '30')
	  {  
	     $fecha = date("H:i",strtotime('-'.$h. 'minutes'.' +1 hour', $hr_mx));
	  }
	  else
	  {
	     $fecha = date("H:i",strtotime("-".((int)$h - 30). "minutes".' +1 hour', $hr_mx));
	   }
	  
	   $hora = DB::table('horas')
                    ->where('hora','LIKE',$fecha."%")
                    ->first();
        return $hora;
    }

    private function getProgram($id)
    {
    	$programa = DB::table('programas')
                    ->where('id_programa',$id)
                    ->first();

        return $programa;
    }

    private function recentProgram()
    {
    	
    	return  $this->getProgram($this->getHorario($this->getHora()->id_hora)->id_programa);

    }

    private function getAllProgramService($horarios)
    {
    	$programs = array();
	
    	foreach ($horarios as $i => $horario)
        {
       	      //var_dump($horario->id_programa);
              $programa = $this->getProgram($horario->id_programa);
               $programa->horario = $this->getHoraProgram($horario-> id_hora_inicio)->hora;
              if (!array_key_exists($programa->id_programa, $programs)){
              	$programs[] = $programa; 
              }                       	
        }
        return $programs;
	
    }

    //// Fix de Horarios
    private function getAllProgram($horarios)
    {
    	

    	foreach ($horarios as $i => $horario)
        {
            if($i==0)
            {
                $i = 1;
            }
            if($horarios[$i]->id_programa != $horarios[$i-1]->id_programa)
            {
              $programa = $this->getProgram($horario->id_programa);
              $programa->horario = $this->getHoraProgram($horario-> id_hora_inicio)->hora;
             
              $programas[$i] = $programa;     
            }
        	
        }

        return $programas;
    }

    private function getAllProgramHoras($horarios)
    {

        foreach ($horarios as $i => $horario)
        {
            if($i==0)
            {
                $i = 1;
            }
            if($horarios[$i]->id_programa != $horarios[$i-1]->id_programa)
            {
              $hora = $this->getHoraProgram($horario->id_hora_inicio);
              $horas[$i] = $hora;     
            }
            
        }

        return $horas;

      }

    private function getHoraProgram($hora)
    {
       $hora = DB::table('horas')
                    ->where('id_hora','=',$hora)
                    ->first();

        return $hora;

    }

    private function getHorariosDia($dia)
    {
      

      $horarios = DB::table('horarios')
                    ->where('id_dia', $dia)
                    ->where('id_hora_inicio','>=',1)
                    ->get();

       return $horarios;    
    }

    private function getAllPrograms()
    {
    $programas = DB::table('programas')
    		     ->select('id_programa', 'nombre')
    		     ->get();

        return $programas;
    }

    private function getProgramSchedulle($program,$day)
    {
    	$horarios = DB::table('horarios')
    		    ->where('id_programa',$program)
    		    ->where('id_dia', $day)
    		    ->select('descripcion','id_hora_inicio')
                    ->get();

       return $horarios;    
    }

   private function getTimeProgram($id_hora)
   {
    $time = DB::table('horas')
    		->where('id_hora',$id_hora)
    		->first();
    return $time;
    }

    private function getProgramService($program,$day)
    {
    $schedulle = $this->getProgramSchedulle($program,$day);
    $programSchedulle = array();
    
    foreach ($schedulle as $i => $s)
        {           
            $time = $this->getTimeProgram($s->id_hora_inicio);
            $programSchedulle[$i] = array("descripcion" => $s->descripcion,
            				      "time" => $time->hora
            					);            
        }                   
    	return $programSchedulle;     
    }

    private function GetProgramsByDay($dia)
    {
    	$programs = DB::table('horarios')
    		    ->where('id_dia', $dia)
    		    ->join('programas', 'programas.id_programa', '=', 'horarios.id_programa')
    		    ->distinct()
    		    ->get(array('programas.id_programa', 'programas.nombre'));
                    
                    
       return $programs;
    
    }

    private function GetHoraiosByProgrma($id)
        {
    	$horarios = DB::table('horarios')
    		    ->join('horas', function($join) {
    		    $join->on('horarios.id_hora_inicio','=','horas.id_hora');
    		    
    		    })
    		    ->where('horarios.id_programa', '=',$id )
    		    ->select("horarios.id_dia", "horas.hora", "horarios.descripcion")
    		    //->groupBy('horarios.id_dia')
    		    ->orderBy('horarios.id_dia', 'asc')
    		    ->get();
    return $horarios;
    }
    



}
