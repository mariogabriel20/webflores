<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class pagController extends Controller{
    //
    public function inicio(){
		return view('index');
	}
	
	public function vistacatalogo1(){
        return view('catalogo_flores');
    }
	
	public function vistacatalogo2(){
        return view('catalogo_arreglos');
    }
	
	public function vistatutoriales(){
		return view('tutoriales');
	}
	
	public function vistacontacto(){
		return view('contacto');
	}
	

}