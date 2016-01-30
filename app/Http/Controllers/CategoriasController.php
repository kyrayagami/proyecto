<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriaRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;

class CategoriasController extends Controller
{
    public function index()
    {
    	$categorias = Categoria::orderBy('id', 'DESC')->paginate(5);
    	return view('admin.categorias.index')->with('categorias', $categorias);
    }
    public function create()
    {
    	return view('admin.categorias.create');
    }
    public function store(CategoriaRequest $request)
    {
    	$categoria = new Categoria($request->all());
    	$categoria->save();

    	Flash::success('La categoria '.$categoria->nombre .' se registro con exito!!');
    	return redirect()->route('admin.categorias.index');
    }
    public function edit($id)
    {
    	$categoria = Categoria::find($id);
    	return view('admin.categorias.edit')->with('categoria',$categoria);
    }
    public function update(Request $request,$id)
    {
    	$categoria= Categoria::find($id);
    	$categoria->fill($request->all());
    	$categoria->save();
    	Flash::warning('La categoria : '.$categoria->nombre.' se actualizo con exito!!!');
    	return redirect()->route('admin.categorias.index');
    }
    public function destroy($id)
    {
    	$categoria = Categoria::find($id);
    	$categoria->delete();
    	Flash::error('Se elimino la categoria : '.$categoria->nombre.' satisfactoriamente!!');
    	return redirect()->route('admin.categorias.index');
    }
}