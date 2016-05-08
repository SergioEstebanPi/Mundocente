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
			<div class="banner col-xs-12 col-sm-12 col-md-8 col-lg-9">
				<!-- <div class="banner"> -->
					<img class="img-responsive" src="{{ URL::asset('img/carrusel/banner-1.jpg') }}">
				<!-- </div> -->
			</div>
			<div class="banner-side col-xs-12 col-sm-12 col-md-4 col-lg-3">
				<form action="/ingreso" method="post" class="ingreso form-horizonal">
					<!-- <fieldset> -->

					<!-- Form Name -->
					<legend class="text-center">Ingreso</legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="text-right col-md-4 control-label" for="nombre">Correo</label>  
					  <div class="col-md-8">
					  <input id="nombre" name="nombre" type="text" placeholder="Ingresa tu correo" class="form-control input-md" required="">
					  <span class="help-block">correo@dominio.com</span>  
					  </div>
					</div>

					<!-- Password input-->
					<div class="form-group">
					  <label class="text-right col-md-4 control-label" for="contrasena">Contraseña</label>
					  <div class="col-md-8">
					    <input id="contrasena" name="contrasena" type="password" placeholder="Ingresa tu contraseña" class="form-control input-md" required="">
					    <span class="help-block">Minimo 6 caracteres</span>
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="text-right col-md-4 control-label" for="selectbasic">Soy</label>
					  <div class="col-md-8">
					    <select id="selectbasic" name="selectbasic" class="form-control">
					      <option value="1">Docente</option>
					      <option value="2">Funcionario</option>
					    </select>
					  </div>
					</div>


					<!-- Button -->
					<div class="form-group col-xs-12 col-sm-12 col-md-12">
					  <a class="botones control-label" href="#">Olvide mi contraseña</a>
					   <button id="ingresar" name="ingresar" class="botones btn btn-primary">Ingresar</button>
					</div>

					<!-- </fieldset> -->
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