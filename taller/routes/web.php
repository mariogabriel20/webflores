<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|	
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'pagController@inicio')->name('index');

Route::get('/catalogo_flores','pagController@vistacatalogo1')->name('catalogo_flores');

Route::get('/catalogo_arreglos','pagController@vistacatalogo2')->name('catalogo_arreglos');

Route::get('/tutoriales','pagController@vistatutoriales')->name('tutoriales');

Route::get('/contacto','pagController@vistacontacto')->name('contacto');

Route::post('message', function(){
		
      $data = request()->all();

		Mail::send('emails.mensaje', $data, function($message) use ($data){
        $message->from($data['email'], $data['name'])
        ->to('matias.guerrero@alumnos.uta.cl', 'Andres')
        ->subject("message");
		});

      return back()->with('flash',$data['name']. ', Tu mensaje ha sido recibido');
    
})->name('message');

