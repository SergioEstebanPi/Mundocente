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

/* 
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('/', function(){
	return view('index');
});
*/
Route::post('/saludar', 'BuscadorController@saludar');


Route::get('/', 'BuscadorController@iniciar');

Route::get('/publicaciones/lista', 'BuscadorController@lista');

Route::get('/publicaciones/nuevo', 'BuscadorController@get_nuevo');

Route::post('/publicaciones/nuevo', 'BuscadorController@post_nuevo');

//Route::get('saludar', 'BuscadorController@saludar');

//Route::controller('saludar', 'BuscadorController@saludar');