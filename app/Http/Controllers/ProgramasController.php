<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\ProgramasRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Programa;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;

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
    public function store(ProgramasRequest $request)
    {
    	
    }
    public function edit($id)
    {

    }    
    public function update(Request $request,$id)
    {

    }
    public function destroy($id)
    {
    	
    }

}
