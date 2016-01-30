<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductoresRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Productor;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;


class ProductoresController extends Controller
{
    //
    public function index()
    {
        $productores = Productor::orderBy('id','DESC')->paginate(5);
    	return view('admin.productores.index')->with('productores',$productores);
    }

    public function create()
    {
    	return view('admin.productores.create');
    }
     
    public function store(ProductoresRequest $request)
    {
    	$productor = new Productor($request->all());
        $productor->estatus = 'ACTIVO';
        $productor->save();        
        Flash::success('La productor '.$productor->nombre .' se registro con exito!!');
        return redirect()->route('admin.productores.index');
    }
    public function edit($id)
    {
        $productor = Productor::find($id);
        return view('admin.productores.edit')->with('productor',$productor);
    }    
    public function update(Request $request,$id)
    {
        $productor = Productor::find($id);
        $productor->fill($request->all());
        $productor->save();
        Flash::warning('Se actualizo : '.$productor->nombre.' satisfactoriamente!!');
        return redirect()->route('admin.productores.index');

    }
    public function destroy($id)
    {
    	$productor = Productor::find($id);
        $productor->delete();
        Flash::error('Se elimino : '.$productor->nombre.' correctamente!!');
        return redirect()->route('admin.productores.index');
    }
}
