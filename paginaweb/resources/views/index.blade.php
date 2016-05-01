@extends('layouts.base')

@section('titulo')
	Inicio
@stop

@section('inicio')
	class="active"
@stop

@section('superior')
	<div class="superior container">
		<!-- <h1>Inicio</h1>
		<h2>Mundocente</h2>  -->
		<div class="row">
			<div class="banner col-xs-12 col-sm-12 col-md-9">
				<!-- <div class="banner"> -->
					<img class="img-responsive" src="{{ URL::asset('img/carrusel/banner-1.jpg') }}">
				<!-- </div> -->
			</div>
			<div class="banner-side col-xs-12 col-sm-12 col-md-3">
				<form role="form" action="/ingreso" method="post" class="ingreso">
					{{ csrf_field() }}
				  	<h1>Ingresar</h1>
				  	<div class="form-group">
					    <label for="email">Correo</label>
					    <input name="email" type="email" class="form-control" id="email" placeholder="Ingresa tu correo">
					  </div>
				  	<div class="form-group">
					    <label for="password">Contraseña</label>
					    <input name="password" type="password" class="form-control" id="password" placeholder="Contraseña">
				  	</div>
				  	<div class="form-group">
				  		<a href="/"><span class="small">Olvidé mi contraseña</span></a>
				  		<button type="submit" class="btn btn-primary">Ingresar</button>
				  	</div>
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
	@if(isset($publicaciones))
		@section('contenido')
			<h1>Resultados de búsqueda</h1>
			@foreach($publicaciones as $publicacion)
				<div class="lista">
					<article class="publicacion">            
						<div id="contenido-publicacion" class="">
			               <!--  <h2><a class="titulo-publicacion" href="/Candidate/ofertas-de-trabajo/oferta-de-trabajo-de-auxiliar-de-plasticos--inyeccion-de-plasticos--en-bogota-dc-9B0FAFDA1A0783F2">Auxiliar de plasticos  - inyeccion de plasticos </a></h2>
			                <span><a href="http://www.computrabajo.com.co/empresas/ofertas-de-trabajo-de-grupo-t-y-s-6A5CE98DE2C370B0">Grupo T y S</a></span>
			                <p>Empresa ubicada por bosa la despensa requiere hombres con experiencia en inyeccion de plasticos que cuenten con...</p>

			                -->

			                {{ $publicacion }}
			            </div>
			            <div id="fecha-publicacion" class="">
			                <ul>
			                    <li><div class=""></div>{{ $publicacion-> }}</li>
			                    <li><div class=""></div>Bogotá, D.C.</li>
			                    <li><div class=""></div>Producción / Operarios / Manufactura</li>
			                </ul>
			            </div>

				    </article>

				    <div class="espacio">
			    	
			    	</div>
		    	</div>
			@endforeach
		@overwrite
	@endif
@stop