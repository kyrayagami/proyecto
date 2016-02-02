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
        //dd($horario);
        $horario->save();
        Flash::success('El horario se registro con exito!!');
        return redirect()->route('admin.horarios.index');
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
}