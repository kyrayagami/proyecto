<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//llama la clase

use App\Tag;

class TagsController extends Controller
{
    //
    public function index()
    {
    	return view('admin.tags.index');
    }

    public function create()
    {
    	return view('admin.tags.create');
    }
}
