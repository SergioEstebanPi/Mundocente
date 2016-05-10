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

use App\publicacion;
use App\funcionario;
use App\establecimiento;

Route::get('/', function () {
    return view('index');
});

//Route::get('/servicios', function () {
//    return view('servicios');
//});

Route::get('/miarea', function () {
	if( !Auth::check() )
		return redirect('/');
    return view('miarea');
});

//Route::get('/registro', function () {
 //   return view('registro');
//});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('ingreso', 'Auth\AuthController@getLogin');
Route::post('ingreso', 'Auth\AuthController@postLogin');

//Route::get('registro', 'Auth\AuthController@getRegister');
Route::post('registro', 'Auth\AuthController@postRegister');

//Route::post('buscar', 'BuscadorController@buscarPublicaciones');
Route::get('buscar', 'BuscadorController@buscarPublicaciones');

Route::get('buscar/{tipo}', 'BuscadorController@buscarTipo');

Route::get('salir', function(){
	Auth::logout();
	return redirect('/');
});

Route::get('/prueba', function(){
	return view('prueba');
});


// Area del docente
Route::group( ['middleware' => ['auth', 'docente'], 'prefix' => 'docente'], function(){
	Route::get('/', function(){
		return view('docente.paneldocente');
	});
});

// Area del funcionario
Route::group( ['middleware' => ['auth', 'funcionario'], 'prefix' => 'funcionario'], function(){
	Route::get('/', function(){
		return view('funcionario.paneldocente');
	});
});

// Area del admin
Route::group( ['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function(){
	Route::get('/', function(){
		return view('admin.paneldocente');
	});
});

/*

Route::get('/admin/paneladmin', function(){
	return view('admin.paneladmin');
});

Route::get('/docente/paneldocente', function(){
	return view('docente.paneldocente');
});

Route::get('/funcionario/panelfuncionario', function(){
	return view('funcionario.panelfuncionario');
});

*/

/*
Route::get('obtenerPublicaciones', function(){
	$funcionarios = funcionario::find(1);
	$publicaciones = $funcionarios->publicacion;

	foreach($publicaciones as $publicacion) {
		echo $publicacion->nombre . " funcionario ".$publicacion->funcionario->nombre ."<br/>";
	}
});
*/