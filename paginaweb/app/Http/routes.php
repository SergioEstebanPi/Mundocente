<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('index');
});

//Route::get('/servicios', function () {
//    return view('servicios');
//});

Route::get('/busqueda', function () {
	if( !Auth::check() )
		return redirect('ingreso');
    return view('busqueda');
});

//Route::get('/registro', function () {
 //   return view('registro');
//});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('ingreso', 'Auth\AuthController@getLogin');
Route::post('ingreso', 'Auth\AuthController@postLogin');

Route::get('registro', 'Auth\AuthController@getRegister');
Route::post('registro', 'Auth\AuthController@postRegister');

//Route::post('buscar', 'BuscadorController@buscarPublicaciones');
Route::post('buscar', 'BuscadorController@buscarEmpleos');

Route::get('salir', function(){
	Auth::logout();
	return redirect('/');
});