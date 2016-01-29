<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\ProductoresRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//llama la clase
use App\Productor;

class ProductoresController extends Controller
{
    //
    public function index()
    {
    	return view('admin.productores.index');
    }

    public function create()
    {
    	return view('admin.productores.create');
    }
     
    public function store(ProductoresRequest $request)
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
