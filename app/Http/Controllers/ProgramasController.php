<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProgramasRequest;
use App\Programa;
use App\Conductor;
use App\Categoria;
use App\Productor;
use App\Tag;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;

class ProgramasController extends Controller
{
    //
    public function index()    
    {
    	$programas = Programa::orderBy('id', 'DESC')->paginate(5);
        $programas->each(function($programas){
            $programas->categoria;
            $programas->productor;
            //$programas->tags;
        });
        return view('admin.programas.index')
            ->with('programas', $programas);
    }

    public function create()
    {
        $categorias = Categoria::orderBy('nombre','ASC')->lists('nombre','id');

        $tags = Tag::orderBy('nombre','ASC')->lists('nombre','id');
        $productores = Productor::orderBy('nombre','ASC')->lists('nombre','id');
        $conductores = Conductor::orderBy('nombre','ASC')->lists('nombre','id');
    	return view('admin.programas.create')
            ->with('conductores',$conductores)
            ->with('productores',$productores)
            ->with('categorias',$categorias)
            ->with('tags',$tags);
    }
    public function store(ProgramasRequest $request)
    {
    	$programa = new Programa($request->all());
        $programa->estatus = 'ACTIVO';
        $programa->save();

        $programa->conductores()->sync($request->conductores);
        $programa->tags()->sync($request->tags);

        Flash::success('El programa '.$programa->nombre .' se registro con exito!!');
        return redirect()->route('admin.programas.index');
    }
    public function edit($id)
    {
        $programa = Programa::find($id);
        $programa -> categoria();
        $programa -> productor();

        $categorias = Categoria::orderBy('nombre','DESC')->lists('nombre','id');
        $productores = Productor::orderBy('nombre','ASC')->lists('nombre','id');
        $tags = Tag::orderBy('id','DESC')->lists('nombre','id');
        $mis_tags = $programa->tags->lists('id')->ToArray();

        $conductores = Conductor::orderBy('id','DESC')->lists('nombre','id');
        $mis_conductores = $programa->conductores->lists('id')->ToArray();
        return view('admin.programas.edit')
            ->with('programa',$programa)
            ->with('productores',$productores)
            ->with('categorias',$categorias)
            ->with('tags',$tags)
            ->with('mis_tags',$mis_tags)
            ->with('conductores',$conductores)
            ->with('mis_conductores',$mis_conductores);
    }
    public function update(Request $request,$id)
    {
        $programa= Programa::find($id);
        $programa->fill($request->all());
        /* todavia falta para conductores*/        
        $programa->save();
        $programa->tags()->sync($request->tags);
        $programa->conductores()->sync($request->conductores);
        Flash::warning('El programa : '.$programa->nombre.' se actualizo con exito!!!');
        return redirect()->route('admin.programas.index');
    }
    public function destroy($id)
    {
        $programa = Programa::find($id);
        $programa->delete();
        Flash::error('Se elimino el programa : '.$programa->nombre.' satisfactoriamente!!');
        return redirect()->route('admin.programas.index');
    }
}
