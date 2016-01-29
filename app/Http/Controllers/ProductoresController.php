<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
