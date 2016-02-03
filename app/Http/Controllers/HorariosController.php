<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HorarioRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;
use App\Horario;
use App\Dia;
use App\Programa;

class HorariosController extends Controller
{
    //
    public function index()
    {
        $horarios = Horario::orderBy('id','DESC')->paginate(5);
        
    	return view('admin.horarios.index')->with('horarios',$horarios);
    }
    public function create()
    {	
    	$dias = Dia::orderBy('id','ASC')->lists('dia','id');
        $programas =Programa::orderBy('id','ASC')->lists('nombre','id');        
    	return view('admin.horarios.create')
            ->with('dias',$dias)
            ->with('programas',$programas);
    }   
    public function store(Request $request)
    {
        //dd($request);
        $horario = new Horario($request->all());
        $result =validar($horario->id_dia,$horario->hora_inicio,$horario->hora_termino);
        if($result =='no'){
            $horario->save();
            Flash::success('El horario se registro con exito!!');
            return redirect()->route('admin.horarios.index');
        }
        Flash::success('Ya hay un programa registrado con ese horario');
        
        //dd($horario);        
    }

    public function edit($id)
    {
        $horario = Horario::find($id);
        $horario ->programa();
        $horario ->dia();
        //$programa -> productor();

        $programas = Programa::orderBy('nombre','DESC')->lists('nombre','id');
        $dias = Dia::orderBy('dia','ASC')->lists('dia','id');
        //$tags = Tag::orderBy('id','DESC')->lists('nombre','id');
        //$mis_tags = $programa->tags->lists('id')->ToArray();

        //$conductores = Conductor::orderBy('id','DESC')->lists('nombre','id');
        //$mis_conductores = $programa->conductores->lists('id')->ToArray();
        return view('admin.horarios.edit')
            ->with('programas',$programas)                    
            ->with('dias',$dias)                        
            ->with('horario',$horario);
    }
    public function update(Request $request,$id)
    {
        $horario= Horario::find($id);
        $horario->fill($request->all());
        /* todavia falta para conductores*/        
        $programa->save();
        //$programa->tags()->sync($request->tags);
        //$programa->conductores()->sync($request->conductores);
        Flash::warning('El programa : '.$horario->programa->nombre. ' con horario de '.$horario->hora_inicio. 'a'.$horario->hora_termino .' se actualizo con exito!!!');
        return redirect()->route('admin.horarios.index');
    }

    public function destroy($id)
    {
        $horario = Horario::find($id);
        $horario->delete();
        Flash::success('Se elimnio el horario satisfactoriamente!!');
        return redirect()->route('admin.horarios.index');
    }
    public function validar($dia,$hora_inicio,$hora_termino)
    {
        $hay_registro='';
        $verifica= Horario::orderBy('id','ASC')
            ->where('dia_id','=',$dia)
            ->where('hora_inicio','<',$hora_inicio)
            ->where('hora_termino','>',$hora_termino)->lists('programa_id');
            if($verifica!=null){
                $hay_registro='si';
                return $hay_registro;
            }
        $verifica = Horario::orderBy('id','ASC')
            ->where('dia_id','=',$dia)
            ->whereBetween('hora_inicio',[$hora_inicio,$hora_termino]);
            if($verifica!=null){
                //$cont = $verifica.count();
                $cont=1;
                while ($verifica.count()>= $cont) {
                    if($hora_termino == $verifica->hora_inicio){
                        $hay_registro = 'no';
                    }else{
                        $hay_registro = 'si';
                        return $hay_registro;
                    }
                    $cont++;
                }
            }else{
                $hay_registro='no';
            }

        $verifica = Horario::orderBy('id','ASC')
            ->where('dia_id','=',$dia)
            ->whereBetween('hora_termino',[$hora_inicio,$hora_termino]);
            if($verifica!=null){
                //$cont = $verifica.count();
                $cont=1;
                while ($verifica.count()>= $cont) {
                    if($hora_inicio == $verifica->hora_termino){
                        $hay_registro = 'no';
                    }else{
                        $hay_registro = 'si';
                        return $hay_registro;
                    }
                    $cont++;
                }
            }else{
                $hay_registro='no';
            }
        return $hay_registro;            
        /*        
    $hay_registro='';
    // valida que NO SE PUEDAN meter un nuevo horaro entre el rango horarios ya creado
    $consulta=mysql_query("SELECT *  FROM horarios WHERE dia =".$dia."
        AND hora_inicio < '".$hora_inicio."' AND hora_termino > '".$hora_termino."'");
        if (mysql_num_rows($consulta)>0){                   
            $hay_registro='si';
            return $hay_registro;
        }
        else{
            $hay_registro='no';
        }

        // valida que no se registre un horarios con hora inicio antes y la hora de termino 
        //este dentro del rango de otro horarios ya registrado
        $consulta2=mysql_query("SELECT *  FROM horarios WHERE dia =".$dia."
            AND hora_inicio BETWEEN '".$hora_inicio."' AND '".$hora_termino."'");
        // obtenemos la fila y se tiene que comparar la hora de termino del nuevo horarios con la fecha de inicio de la fila obtenida
        if (mysql_num_rows($consulta2)>0){
            while ($dato=mysql_fetch_array($consulta2)){
                if($hora_termino ==  $dato["hora_inicio"]){
                    $hay_registro='no';
                }else{
                    $hay_registro='si';
                    return $hay_registro;
                }               
            }       
        }
        else{
            $hay_registro='no';
        }

        // valida que no se registren horarioss con hora inicio con menos hora y la hora de termino despues de algun horarios registrado en la tabla de horarios
        $consulta3=mysql_query("SELECT *  FROM horarios WHERE dia =".$dia."
        AND hora_termino BETWEEN '".$hora_inicio."' AND '".$hora_termino."'");
        // obtenemos la fila y se tiene que comparar la hora de inicio del nuevo horarios con la fecha de termino de la fila obtenida
        if (mysql_num_rows($consulta3)>0){
            while ($dato=mysql_fetch_array($consulta3)){
                if($hora_inicio ==  $dato["hora_termino"]){
                    $hay_registro='no';
                }else{
                    $hay_registro='si';
                    return $hay_registro;
                }               
            }       
        }
        else{
            $hay_registro='no';
        }
        return $hay_registro;
        /*
        // valida que no se incruste un horarios con hora Inicio un poco mas tarde y que su hora Termino termine un poco mas tarde que algun horarios que exista en la tabla horarios
        $consulta=mysql_query("SELECT * FROM horarios WHERE dia =1
        AND hora_inicio <  '12:15:00'
        AND hora_termino between   '12:15:00'
        AND '13:45:00'  ");
        // obtenemos la fila y se tiene que comparar la hora de inicio del nuevo horarios con la hora_termino de la fila obtenida
    
        }
        */
    }
}