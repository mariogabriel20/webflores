<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagController extends Controller{
    //
    public function vistacatalogo(){
        return view('catalogo');
    }

	public function inicio(){
		return view('index');
	}
	
	public function vistatutoriales(){
		return view('tutoriales');
	}
	
	public function vistacontacto(){
		return view('contacto');
	}
}