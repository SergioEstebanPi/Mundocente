<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Publicacion;
use View;
use Illuminate\Support\Facades\Input;

class BuscadorController extends Controller
{
	public function iniciar(){
		$publicaciones = Publicacion::paginate(10);
		//$publicaciones = Publicacion::all();
		//return view('index')->with('publicaciones', $publicaciones);
		//return View::make('index');
		return View::make('index')->with('publicaciones', $publicaciones);
	}

	public function lista(){
		$publicaciones = Publicacion::all();
		//return View::make('Publicaciones.lista')->with('publicaciones', $publicaciones);
		return View::make('Publicaciones.lista')->with('publicaciones', $publicaciones);
	}

	public function get_nuevo(){
		return View::make('Publicaciones.nuevo');
	}

	public function post_nuevo(){
		$publicaciones = new Publicacion;
		$publicaciones->id_publicacion = Input::get('id');
		$publicaciones->nombre_publicacion = Input::get('nombre');
		$publicaciones->fecha_inicio = '2016-04-08';
		$publicaciones->fecha_fin = '2016-04-08';


		echo "id " . Input::get('id');
		echo "nombre " . Input::get('nombre');
		echo "agregado";
		$publicaciones->save();
		//return Redirect::to('/publicaciones/lista');
	}

    public function saludar(){
    	echo "hola";
    }


    public function buscarPublicaciones(){
    	$dato = Input::get('campo');
    	//echo "id " . $dato;
    	$publicaciones = publicacion::all();
    	//echo $publicaciones;
    	return View::make('index')->with('publicaciones', $publicaciones);
    }

}