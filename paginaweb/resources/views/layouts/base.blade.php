<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/estilos.css') }}">
	<title>Mundocente | @yield('titulo')</title>
</head>
<body>

	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
		  	<div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <a class="navbar-brand" href="/">
					<img id="logo" alt="logo" src="{{ URL::asset('img/logo-imagen.png') }}">
					<img id="texto" alt="nombre" src="{{ URL::asset('img/logomun-texto.png') }}">
			      </a>
			       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">

			      	@if( !Auth::check() )
			        	<li @yield('inicio')><a href="/">Inicio<span class="sr-only">(current)</span></a></li>
			        @endif
			        @if( Auth::check() )
			       		<li @yield('busqueda')><a href="/busqueda">Búsqueda</a></li>
			        @endif
			        <!-- <li @yield('servicios')><a href="/servicios">Servicios</a></li>  -->
			        @if( !Auth::check() )
			        	<li @yield('registro')><a data-toggle="modal" data-target="#myModal" href="#">Registro</a></li>
			        @endif

			        <li @yield('contacto')><a href="/contacto">Contacto</a></li>
			        @if( Auth::check() )
			        	<li>
			        	<div class="dropdown">
						  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Usuario
						  <span class="caret"></span></button>
						  <ul class="dropdown-menu">
						    <li><a href="/">Mi área</a></li>
						    <li><a href="/busqueda">Búsqueda</a></li>
						    <li><a href="/salir">Salir</a></li>
						  </ul>
						</div>
						</li>
			        	<!-- <li><a href="/salir">Salir</a></li> -->
			        @endif

			      </ul>
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container-fluid -->
		</nav>

	</header>

	<!-- Trigger the modal with a button -->
	<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Registrate en Mundocente</h4>
	      </div>
	      <form role="form" action="registro" method="post">
		      <div class="modal-body">
		        <p>Registrate y encuentra más publicaciones</p>
					{{ csrf_field() }}
					<div class="form-group">
				    	<label for="name">Nombre</label>
				    	<input name="name" type="text" class="form-control" id="name" placeholder="Introduce tu nombre">
				  	</div>
				  	<div class="form-group">
				    	<label for="email">Correo</label>
				    	<input name="email" type="email" class="form-control" id="email" placeholder="Introduce tu correo">
				  	</div>
				  	<div class="form-group">
				    	<label for="password">Contraseña</label>
				    	<input name="password_confirmation" type="password" class="form-control" id="password" placeholder="Contraseña">
				 	</div>
				 	<div class="form-group">
				    	<label for="password">Confirmar Contraseña</label>
				    	<input name="password" type="password" class="form-control" id="password" placeholder="Contraseña">
				 	</div>
				 	<div class="checkbox">
					    <label>
					      <input type="checkbox"> Recibir notificaciones por correo
					    </label>
				  	</div>
				</div>

		      <div class="modal-footer">
		      	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
		      	<button type="submit" class="btn btn-primary">Registrar</button>
		      </div>
	    	</div>
	    </form>

	  </div>
	</div>


	<div class="row">
		@yield('superior')
		<div class="panel container">
			<div class="panel-izquierdo col-xs-12 col-sm-12 col-md-3">
				<div class="">
					<div class="titulo-panel text-center col-xs-12 col-sm-12 col-md-12">
						<h3>Realiza una búsqueda</h3>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<form class="" role="search">
							        <div class="form-group">
							        	<!-- <label for="buscador">Búsqueda</label> -->
							          	<input id="buscador" name="buscador" type="text" class="form-control" placeholder="Busca oportunidades...">
							          	<!-- <button type="submit" class="btn btn-primary">Buscar</button> -->
							        </div>
						    	</form>
						    </div>
					    	<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="resultados">
								</div>
							</div>
					    </div>
					</div>
				</div>	
			</div>
			<div class="principal col-xs-12 col-sm-12 col-md-9">
				<div class="">
					
					@yield('contenido')
					@yield('inferior')
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="bottom-footer">
				<h3>Desarrollo:</h3>
				<ul>
					<li>Deybi Pulido - <span class="small"> Back-End</span></li>
					<li>Sergio Piña - <span class="small"> Front-End</span></li>
					<li>Juan Rogriguez - <span class="small"> Aseguramiento de Calidad </span></li>
					<li>Sebastian Sarmiento - <span class="small"> Aseguramiento de Calidad</span></li>
				</ul>
				<div class="col-xs-12 col-sm-12 col-md-12">
					
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="{{ URL::asset('js/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript">
		function mostrarResultados(palabra){
			$.ajax({
			});
		}
	</script>
</body>
</html>