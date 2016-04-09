@extends('layouts.base')

@section('formulario')
	<form>
		<h3>Realizar una búsqueda</h3>
		<input type="text" placeholder="Escribe"></input>
		<button type="submit">Buscar</button>
	</form>
@stop

@section('resultados')
	<div class="resultados">
		<h1>Resultados encontrados</h1>
		<div>
		</div>
	</div>
@stop