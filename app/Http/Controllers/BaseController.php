<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    //
    	protected function setupLayout()
    	{
    		if( ! is_null($this->layout))
    		{
    			$this->layout = view::make($this->layout);
    		}

    	}
}
