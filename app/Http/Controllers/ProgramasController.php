<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//llama la clase
use App\Programa;

class ProgramasController extends Controller
{
    //
    public function index()
    {
    	return view('admin.programas.index');
    }

    public function create()
    {
    	return view('admin.programas.create');
    }
}
