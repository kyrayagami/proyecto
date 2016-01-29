<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Conductor;

class ConductoresController extends Controller
{
    //
    public function index()
    {
    	return view('admin.conductores.index');
    }
}
