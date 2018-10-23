<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagController extends Controller
{
    //
    public function vistacatalogo(){
        return view('ejemplo');
    }

	public function inicio(){
		return view('index');
	}
}