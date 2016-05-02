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

    function buscarPublicaciones() {
    	$mi_dato = Input::get('campo');
    	$emp = $this->buscarEmpleos($mi_dato);
    	$eve = $this->buscarEventos($mi_dato);
    	$rev = $this->buscarRevistas($mi_dato);

    
    	//return View::make('index')->with('publicaciones', $resultado);
    	return View::make('index')->with([
    		'empleos' => $emp,
    		'eventos' => $eve,
    		'revistas' => $rev
    	]);
    }


    function buscarEmpleos($mi_dato){
    	//echo $mi_dato;
    	//$mi_dato = Input::get('campo');
		$consulta = "select DISTINCT e.nombre_empleo, e.fecha_cierre_empleo, e.contacto_empleo, e.salario_empleo, l.nombre_lugar, a.nombre_area, es.nombre_establecimiento, p.datos_publicacion, p.fecha_publicacion,
			( case TIPO_PUBLICACION WHEn 'RE' then 'REVISTA' when 'EM' then 'EMPLEO' when 'EV' then 'EVENTO' END ) as tipo
			from publicaciones p,empleos e,lugares l,areas a,establecimientos es,grupos g,funcionarios f 
			where (p.id_empleo=e.id_empleo 
				and p.id_lugar=l.id_lugar 
				and g.id_publicacion=p.id_publicacion 
				and g.id_area=a.id_area 
				and p.id_funcionario=f.id_funcionario 
				and f.id_establecimiento=es.id_establecimiento ) 
			and (e.nombre_empleo LIKE '%".$mi_dato."%' 
			or l.nombre_lugar LIKE '%".$mi_dato."%' 
			or es.nombre_establecimiento LIKE '%".$mi_dato."%' 
			or a.nombre_area LIKE '%".$mi_dato."%' )";
		$resultado = DB::select($consulta);
//		return View::make('index')->with('publicaciones', $resultado);
		return $resultado;
	}

	function buscarEventos($mi_dato){
		$consulta = "select DISTINCT p.datos_publicacion, p.fecha_publicacion, e.nombre_evento, e.fecha_cierre_evento, e.contacto_evento, ( case CATEGORIA_EVENTO WHEn 'SE' then 'SEMINARIO' when 'AS' then 'ASAMBLEA' when 'CG' then 'CONGRESO' when 'JO' then 'JORNADA' when 'CO' then 'CONVENCION' when 'RE' then 'REUNION' when 'CF' then 'CONFERENCIA' when 'SI' then 'SIMPOSIO' when 'TA' then 'TALLER' when 'FO' then 'FORO' when 'CU' then 'CURSO' when 'OT' then 'OTRO' END )AS CATEGORIA, l.nombre_lugar, a.nombre_area, es.nombre_establecimiento ,
			( case TIPO_PUBLICACION WHEn 'RE' then 'REVISTA' when 'EM' then 'EMPLEO' when 'EV' then 'EVENTO' END )  as tipo
			from publicaciones p,eventos e,lugares l,areas a,establecimientos es,grupos g,funcionarios f 
			where (p.id_evento=e.id_evento
				and p.id_lugar=l.id_lugar 
				and g.id_publicacion=p.id_publicacion 
				and g.id_area=a.id_area 
				and p.id_funcionario=f.id_funcionario 
				and f.id_establecimiento=es.id_establecimiento ) 
			and (e.nombre_evento LIKE '%".$mi_dato."%' 
			or l.nombre_lugar LIKE '%".$mi_dato."%' 
			or es.nombre_establecimiento LIKE '%".$mi_dato."%' 
			or a.nombre_area LIKE '%".$mi_dato."%' )
			";
			$resultado = DB::select($consulta);
			return $resultado;
	}

	function buscarRevistas($mi_dato){
		//$mi_dato = Input::get('campo');
		$consulta = "select DISTINCT p.datos_publicacion, p.fecha_publicacion, r.tema_revista, r.fecha_cierre_revista, r.contacto_revista, r.url_revista, l.nombre_lugar, a.nombre_area, es.nombre_establecimiento ,
				( case TIPO_PUBLICACION WHEn 'RE' then 'REVISTA' when 'EM' then 'EMPLEO' when 'EV' then 'EVENTO' END ) as tipo
				from publicaciones p,revistas r,lugares l,areas a,establecimientos es,grupos g,funcionarios f 
				where (p.id_revista=r.id_revista 
					and p.id_lugar=l.id_lugar 
					and g.id_publicacion=p.id_publicacion 
					and g.id_area=a.id_area 
					and p.id_funcionario=f.id_funcionario 
					and f.id_establecimiento=es.id_establecimiento ) 
			and (r.tema_revista LIKE '%".$mi_dato."%' 
				or l.nombre_lugar LIKE '%".$mi_dato."%' 
				or es.nombre_establecimiento LIKE '%".$mi_dato."%' 
				or a.nombre_area LIKE '%".$mi_dato."%' )
			";
			$resultado = DB::select($consulta);
			return $resultado;
	}



}