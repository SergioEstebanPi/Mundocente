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
						<img width="100px" src="{{ URL::asset('/img/servicios/signature.png') }}">
						<h3>Revistas Científicas</h3>
						<p>Ahorra tiempo conociendo las revistas científicas que a la fecha reciben artículos de tu área de interés.<a href="#">ver más</a></p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div id="convocatorias" class="text-center">
						<img width="100px" src="{{ URL::asset('/img/servicios/business.png') }}">
						<h3>Convocatorias Docentes</h3>
						<p>Entérate oportunamente sobre las oportunidades laborales del ámbito universitario y cumple con tus metas de crecimiento profesional.<a href="#">ver más</a></p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div id="eventos" class="text-center">
						<img width="100px" src="{{ URL::asset('/img/servicios/time.png') }}">
						<h3>Eventos Académicos</h3>
						<p>Encuentra congresos, seminarios, conferencias y demás eventos académicos de tu interés para capacitación o presentación de tus resultados de investigación.<a href="#">ver más</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('inferior')
	@if(isset($empleos))
		@section('contenido')
				<h1 class="text-center">Resultados de búsqueda</h1>
				<div class="lista">
					<?php foreach ($empleos as $empleo) { ?>		
	    				
							<article class="publicacion">            
								<div id="contenido-publicacion" class="">
					               <h2><a class="titulo-publicacion" href="#"><?php echo $empleo->nombre_empleo ?></a></h2>
					                <span><a href="#"><?php echo $empleo->nombre_establecimiento ?></a></span>
					                <p><?php echo $empleo->datos_publicacion ?></p>

					            </div>
					            <div id="fecha-publicacion" class="">

					            <div class="list-group">
									  <div>Fecha publicación: <span class="small">  <?php echo $empleo->fecha_publicacion ?></span></div>
									  <div>Lugar: <span class="small">  <?php echo $empleo->nombre_lugar ?></span></div>
									  <div>Tipo publicación: <span class="small">  <?php echo $empleo->tipo ?></span></div>		  
								</div>
					
						    </article>
						    <div class="espacio">
					    	
					    	</div>
				    <?php }	?>
				    <?php foreach ($eventos as $evento) { ?>		
	    				
							<article class="publicacion">            
								<div id="contenido-publicacion" class="">
					               <h2><a class="titulo-publicacion" href="#"><?php echo $evento->nombre_evento ?></a></h2>
					                <span><a href="#"><?php echo $evento->nombre_establecimiento ?></a></span>
					                <p><?php echo $evento->datos_publicacion ?></p>

					            </div>
					            <div id="fecha-publicacion" class="">

					            <div class="list-group">
									  <div>Fecha publicación: <span class="small">  <?php echo $evento->fecha_publicacion ?></span></div>
									  <div>Lugar: <span class="small">  <?php echo $evento->nombre_lugar ?></span></div>
									  <div>Tipo publicación: <span class="small">  <?php echo $evento->tipo ?></span></div>		  
								</div>
					
						    </article>
						    <div class="espacio">
					    	
					    	</div>
				    <?php }	?>
				    <?php foreach ($revistas as $revista) { ?>		
	    				
							<article class="publicacion">            
								<div id="contenido-publicacion" class="">
					               <h2><a class="titulo-publicacion" href="#"><?php echo $revista->tema_revista ?></a></h2>
					                <span><a href="#"><?php echo $revista->nombre_establecimiento ?></a></span>
					                <p><?php echo $revista->datos_publicacion ?></p>

					            </div>
					            <div id="fecha-publicacion" class="">

					            <div class="list-group">
									  <div>Fecha publicación: <span class="small">  <?php echo $revista->fecha_publicacion ?></span></div>
									  <div>Lugar: <span class="small">  <?php echo $revista->nombre_lugar ?></span></div>
									  <div>Tipo publicación: <span class="small">  <?php echo $revista->tipo ?></span></div>		  
								</div>
					
						    </article>
						    <div class="espacio">
					    	
					    	</div>
				    <?php }	?>
			    </div>
		@overwrite
	@endif
@stop