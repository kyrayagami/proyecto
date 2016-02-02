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
    	return view('admin.horarios.index');
    }

    public function create()
    {	
    	
    	return view('admin.horarios.create');
    }

    public function store(Request $request)
    {
        $horario = new Horario($request->all());
        $horario->save();

        Flash::success('La categoria  se registro con exito!!');
        return redirect()->route('admin.horarios.index');
    }
}
