<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ConductoresRequest;
use App\Http\Controllers\Controller;
use App\Conductor;

class ConductoresController extends Controller
{
    //
    public function index()
    {
    	$conductores = Conductor::orderBy('id_conductor','DESC')->paginate(5);
    	return view('admin.conductores.index')->with('conductores',$conductores);
    }

    public function create()
    {
    	return view('admin.conductores.create');
    }
    public function store(ConductoresRequest $request)
    {
    	$conductor = new Conductor($request->all());
    	$conductor->save();
    	Flash::success('El conductor : '.$conductor->nombre.' se registro con éxito!!');
    	return redirect()->route('admin.conductores.index');
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
