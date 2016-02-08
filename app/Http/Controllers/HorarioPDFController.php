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
        $horarios= Horario::orderBy('hora_inicio','ASC')->orderBy('dia_id','ASC')->get();
        return view('admin.horario_pdf.index')->with('horarios',$horarios);
    }
}
