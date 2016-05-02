<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Publicacion;
use View;
use DB;
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

    public function buscarPublicaciones(){
    	$dato = Input::get('campo');
    	//echo "id " . $dato;
    	//echo $publicaciones;

    	$valor = 'SELECT * FROM publicaciones p, empleos e, grupos g, areas a, funcionarios f, establecimientos es 
    	where p.ID_PUBLICACION = e.ID_EMPLEO AND
		p.ID_PUBLICACION = g.ID_PUBLICACION AND
		g.ID_AREA = a.ID_AREA AND
		p.ID_FUNCIONARIO = f.ID_FUNCIONARIO AND
		f.ID_ESTABLECIMIENTO = es.ID_ESTABLECIMIENTO and (
		a.NOMBRE_AREA like \'%matema%\' OR
		p.DATOS_PUBLICACION like \'%matema%\' OR
		e.NOMBRE_EMPLEO like \'%matema%\' OR
		a.NOMBRE_AREA like \'%matema%\' OR
		es.NOMBRE_ESTABLECIMIENTO like \'%matema%\')';
		//AND es.NOMBRE_ESTABLECIMIENTO = \'JUAN DE CASTELLANOS\');';

		$vvv = "select * from publicaciones";

    	$libroUnico = DB::select($valor);

    	/*
    	foreach ($libroUnico as $val) {
    		echo $val->NOMBRE_EMPLEO;
    	}
    	*/

    	//foreach ($libroUnico as $libroUnicos) {
    	//	echo $libroUnicos;
    	//}
		//dd($libroUnico);
    	//$publicaciones = publicacion::all();
    	//return View::make('index')->with('publicaciones', $publicaciones);
    	return View::make('index')->with('publicaciones', $libroUnico);
    }
}