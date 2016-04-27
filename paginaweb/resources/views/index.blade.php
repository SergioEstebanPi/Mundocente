@extends('layouts.base')

@section('titulo')
	Inicio
@stop

@section('inicio')
	class="active"
@stop

@section('superior2')
	<div class="superior">
		<!-- <h1>Inicio</h1>
		<h2>Mundocente</h2>  -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="banner">
					<img src="{{ URL::asset('img/carrusel/banner-1.jpg') }}">
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3">
				<form role="form" action="/ingreso" method="post" class="ingreso">
					{{ csrf_field() }}
				  	<h1>Ingresar</h1>
				  	<div class="form-group">
					    <label for="correo">Correo</label>
					    <input type="correo" class="form-control" id="correo" placeholder="Ingresa tu correo">
					  </div>
				  	<div class="form-group">
					    <label for="contrasena">Contraseña</label>
					    <input type="password" class="form-control" id="contrasena" placeholder="Contraseña">
				  	</div>
				  	<button type="submit" class="btn btn-primary">Ingresar</button>
				  	<h5>Olvidé mi contraseña</h5>
				</form>
			</div>
		</div>
	</div>
@stop

@section('contenido')
	<div class="contenido">
		<h1 class="titulo">Servicios</h1>
		<div class="row">			
			<div class="">
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div id="revistas" class="text-center">
						<h3>Revistas Científicas</h3>
						<p>Ahorra tiempo conociendo las revistas científicas que a la fecha reciben artículos de tu área de interés.<a href="#">ver más</a></p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div id="convocatorias" class="text-center">
						<h3>Convocatorias Docentes</h3>
						<p>Entérate oportunamente sobre las oportunidades laborales del ámbito universitario y cumple con tus metas de crecimiento profesional.<a href="#">ver más</a></p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div id="eventos" class="text-center">
						<h3>Eventos Académicos</h3>
						<p>Encuentra congresos, seminarios, conferencias y demás eventos académicos de tu interés para capacitación o presentación de tus resultados de investigación.<a href="#">ver más</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('inferior')
	<h1>Inferior</h1>
@stop