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
    	
    	return view('admin.horarios.create');
    }

    public function store(Request $request)
    {
        //dd($request);
        $horario = new Horario($request->all());
        dd($horario);
        $horario->save();

        Flash::success('La categoria  se registro con exito!!');
        return redirect()->route('admin.horarios.index');
    }

    public function destroy($id)
    {
        $horario = Horario::find($id);
        $horario->delete();
        Flash::success('Se elimnio el conductor satisfactoriamente!!');
        return redirect()->route('admin.horarios.index');
    }

}
