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
    	 $programas = $this->getAllProgram($this->getHorarios($this->getHora()));
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
                    ->where('hora_inicio','>',$hora)
                    ->first();
	   return $horario;    
    }


    private function getHorarios($hora)
    {
	   $dia=date('w');
        if ($dia == '0') {
            $dia='7';      
        }

	   $horarios = DB::table('horarios')
                    ->where('dia_id', $dia)
                    ->where('hora_inicio','>=',$hora)
                    ->groupBy('programa_id')
                    ->orderBy('hora_inicio', 'asc')
                    ->get();
	   return $horarios;    
    }

    private function getHora()
    {
    /*
      $h = idate('i');
 	  $hr_mx = strtotime(date("H:i", strtotime(date("H:i", time()))));
	  if ($h < '30')
	  {  
	     $fecha = date("H:i",strtotime('-'.$h. 'minutes'.' +1 hour', $hr_mx));
	  }
	  else
	  {
	     $fecha = date("H:i",strtotime("-".((int)$h - 30). "minutes".' +1 hour', $hr_mx));
	   }*/
	  
      $time = time();   
      $hora =date("H:i:s", $time);
        //echo '..........................'.$nuevo;
	   /*$hora = DB::table('horas')
                    ->where('hora','LIKE',$nuevo."%")
                    ->first();*/
        return $hora;
    }

    private function getProgram($id)
    {
    	$programa = DB::table('programas')
                    ->where('id',$id)
                    ->first();

        return $programa;
    }

    private function recentProgram()
    {
    	
    	return  $this->getProgram($this->getHorario($this->getHora())->programa_id);

    }

    private function getAllProgramService($horarios)
    {
    	$programs = array();
	
    	foreach ($horarios as $i => $horario)
        {
       	      //var_dump($horario->id_programa);
              $programa = $this->getProgram($horario->programa_id);
               $programa->horario = $horario->hora_inicio;
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
            if($horarios[$i]->programa_id != $horarios[$i-1]->programa_id)
            {
              $programa = $this->getProgram($horario->programa_id);
              ////////////////////  
              $programa->horario = $horario->hora_inicio ;// $this->getHoraProgram($horario->id_hora_inicio)->hora;
             
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
            if($horarios[$i]->programa_id != $horarios[$i-1]->programa_id)
            {
              $hora = $horario->hora_inicio;//$this->getHoraProgram($horario->hora_inicio);
              $horas[$i] = $hora;
            }
            
        }

        return $horas;

    }

    //no se usa
    /*
    private function getHoraProgram($hora)
    {
       $hora = DB::table('horas')
                    ->where('id_hora','=',$hora)
                    ->first();

        return $hora;

    }*/

    private function getHorariosDia($dia)
    {    
      $horarios = DB::table('horarios')
                    ->where('dia_id', $dia)                    
                    ->get();

       return $horarios;    
    }

    private function getAllPrograms()
    {
    $programas = DB::table('programas')
    		     ->select('id', 'nombre')
    		     ->get();

        return $programas;
    }

    private function getProgramSchedulle($program,$day)
    {
    	$horarios = DB::table('horarios')
    		    ->where('programa_id',$program)
    		    ->where('dia_id', $day)
    		    ->select('tipo','hora_inicio')
                    ->get();

       return $horarios;    
    }

    ////////////////////////////////////////////////////////////no se puede usar este
    /*private function getTimeProgram($id_hora)
    {
        $time = DB::table('horas')
    		->where('id_hora',$id_hora)
    		->first();
    return $time;
    }*/

    //////////////////////////////////////////////////////////////// no se que onda
    private function getProgramService($program,$day)
    {
    $schedulle = $this->getProgramSchedulle($program,$day);
    $programSchedulle = array();
    
    foreach ($schedulle as $i => $s)
        {           
            //$time = $this->getTimeProgram($s->id_hora_inicio);
            $time = $s->hora_inicio;
            $programSchedulle[$i] = array("tipo" => $s->tipo,
            				      "time" => $time
            					);            
        }                   
    	return $programSchedulle;     
    }

    private function GetProgramsByDay($dia)
    {
    	$programs = DB::table('horarios')
    		    ->where('id_dia', $dia)
    		    ->join('programas', 'programas.id', '=', 'horarios.programa_id')
    		    ->distinct()
    		    ->get(array('programas.programa_id', 'programas.nombre'));
                    
                    
       return $programs;
    
    }

    private function GetHoraiosByProgrma($id)
        {
    	$horarios = DB::table('horarios')    		    
    		    ->select("dia_id", "hora_inicio","hora_termino" , "tipo")
                ->where('horarios.programa_id', '=',$id )
    		    //->groupBy('horarios.id_dia')
    		    ->orderBy('horarios.dia_id', 'asc')
    		    ->get();
    return $horarios;
    }

}