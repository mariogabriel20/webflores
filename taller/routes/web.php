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

Route::get('/catalogo','pagController@vistacatalogo')->name('catalogo');

Route::get('/tutoriales','pagController@vistatutoriales')->name('tutoriales');

Route::get('/contacto','pagController@vistacontacto')->name('contacto');


