<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;

class TagsController extends Controller
{
    //
    public function index(Request $request)
    {        
        $tags = Tag::search($request->nombre)->orderBy('id','DESC')->paginate(5);
    	return view('admin.tags.index')->with('tags',$tags);
    }

    public function create()
    {
    	return view('admin.tags.create');
    }
    public function store(TagRequest $request)
    {
    	$tag = new Tag($request->all());
        $tag->save();

        Flash::success('El tag '.$tag->nombre .' se registro con exito!!');
        return redirect()->route('admin.tags.index');
    }
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tags.edit')->with('tag',$tag);
    }    
    public function update(Request $request,$id)
    {
        $tag= Tag::find($id);
        $tag->fill($request->all());
        $tag->save();
        Flash::warning('El tag : '.$tag->nombre.' se actualizo con exito!!!');
        return redirect()->route('admin.tags.index');
    }
    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        Flash::success('Se elimino el Tag : '.$tag->nombre.' satisfactoriamente!!');
        return redirect()->route('admin.tags.index');
    }
}
