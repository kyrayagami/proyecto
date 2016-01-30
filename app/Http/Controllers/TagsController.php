<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\TagsRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;

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
    public function store(TagRequest $request)
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
