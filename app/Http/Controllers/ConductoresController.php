<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ConductoresRequest;
use App\Http\Controllers\Controller;
use App\Conductor;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;

class ConductoresController extends Controller
{
    //
    public function index(Request $request)
    {
        //$articles = Article::search($request->title)->orderBy('id','DESC')->paginate(5);
    	$conductores = Conductor::search($request->nombre)->orderBy('id','DESC')->paginate(5);
    	return view('admin.conductores.index')->with('conductores',$conductores);
    }

    public function create()
    {
    	return view('admin.conductores.create');
    }
    public function store(ConductoresRequest $request)
    {
    	$conductor = new Conductor($request->all());
        $conductor->estatus = 'ACTIVO';
    	$conductor->save();
    	Flash::success('El conductor : '.$conductor->nombre.' se registro con éxito!!');
    	return redirect()->route('admin.conductores.index');
    }
    public function edit($id)
    {
        $conductor = Conductor::find($id);
        return view('admin.conductores.edit')->with('conductor',$conductor);

    }    
    public function update(Request $request,$id)
    {

        $conductor = Conductor::find($id);
        $conductor->fill($request->all());        
        $conductor->save();
        Flash::warning('EL conductor : '.$conductor->nombre.' se actualizo correctamente!!');
        return redirect()->route('admin.conductores.index');
    }
    public function destroy($id)
    {
        $conductor = Conductor::find($id);
        $conductor->delete();
        Flash::success('Se elimnio el conductor : '.$conductor->nombre.' satisfactoriamente!!');
        return redirect()->route('admin.conductores.index');
    }
}
