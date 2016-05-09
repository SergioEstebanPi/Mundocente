@extends('layouts.base')

@section('titulo')
	Mi Área
@stop

@section('miarea')
	class="active"
@stop

@section('contenido')
	<h3>Bienvenido {{ Auth::user()->email }}</h3>
	<div class="fecha-publicacion superior">
		<div class="text-center col-xs-12 col-sm-12 col-md-12">
			<h1>Mi Área</h1>
		</div>
	</div>

	<div class="listado">
		 
    </div>
@stop