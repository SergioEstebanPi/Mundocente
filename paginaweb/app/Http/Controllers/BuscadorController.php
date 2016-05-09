<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\publicacion;
use View;
//use DB;
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

	/*
    public function buscarPublicaciones(){
    	$dato = Input::get('campo');
    	//echo "id " . $dato;
    	//echo $publicaciones;
    	$publicaciones = publicacion::all();
    	return View::make('index')->with('publicaciones', $publicaciones);
    }
    */

    function buscarPublicaciones() {
    	$mi_dato = Input::get('campo');
    	//$publicaciones = publicacion::all(); 
    	$publicaciones = publicacion::where('nombre', 'like', '%'.$mi_dato.'%')
    		->orwhere('type', 'like', '%'.$mi_dato.'%')
    		->orwhere('fecha_publicacion', 'like', '%'.$mi_dato.'%')
    		->orwhere('requisitos', 'like', '%'.$mi_dato.'%')
    		->orwhere('contacto', 'like', '%'.$mi_dato.'%')
    		->orwhere('url', 'like', '%'.$mi_dato.'%')
    		->get();
		/*
    	$publicaciones2 = publicacion::all();
    	foreach ($publicaciones2 as $publicacion2) {
    		$publicacion2->lugar->where('nombre', '=', $mi_dato)->get();	
    		echo $publicacion2;
    	} 
    	*/

    	//$funcionarios = publicacion->funcionario;

		/*
		foreach ($publicaciones as $publicacion) {
			echo "Publicacion " .$publicacion->nombre ." Funcionario " .$publicacion->funcionario->nombre . "<br />";
		}
		*/

    	//return View::make('index')->with('publicaciones', $resultado);
    	//echo $publicaciones;
    	//dd($publicaciones);
    	return View::make('index')->with('publicaciones', $publicaciones);
    }

    function buscarTipo($tipo){
    	$publicaciones = publicacion::where('type', '=', $tipo)->get();
    	return View::make('index')->with('publicaciones', $publicaciones);
    }

}