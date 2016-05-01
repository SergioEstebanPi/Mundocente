@extends('layouts.base')

@section('titulo')
	Búsqueda
@stop

@section('busqueda')
	class="active"
@stop

@section('contenido')
	<div class="row superior">
		<div class="text-center col-xs-12 col-sm-12 col-md-12">
			<h1>Búsqueda de publicaciones</h1>
		</div>
	</div>

	<div class="row listado">
		<article class="publicacion col-xs-12 col-sm-12 col-md-12">                     

	            <div class="contenido-publicacion col-xs-12 col-sm-9 col-md-9">
	                <h1><a class="titulo-publicacion" href="/Candidate/ofertas-de-trabajo/oferta-de-trabajo-de-auxiliar-de-plasticos--inyeccion-de-plasticos--en-bogota-dc-9B0FAFDA1A0783F2">Auxiliar de plasticos  - inyeccion de plasticos </a></h1>
	                <span><a href="http://www.computrabajo.com.co/empresas/ofertas-de-trabajo-de-grupo-t-y-s-6A5CE98DE2C370B0">Grupo T y S</a></span>
	                <p>Empresa ubicada por bosa la despensa requiere hombres con experiencia en inyeccion de plasticos que cuenten con...</p>
	            </div>
	            <div class="fecha-publicacion col-xs-12 col-sm-3 col-md-3">
	                <ul>
	                    <li><div class="icon clock_n"></div>Ayer, 09:45 p. m.</li>
	                    <li><div class="icon local"></div>Bogotá, D.C.</li>
	                    <li><div class="icon gent"></div>Producción / Operarios / Manufactura</li>
	                </ul>
	            </div>
	    </article>
    </div>
@stop