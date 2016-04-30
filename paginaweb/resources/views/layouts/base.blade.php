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
			        <li @yield('inicio')><a href="/">Inicio<span class="sr-only">(current)</span></a></li>
			        @if( Auth::check() )
			       		<li @yield('busqueda')><a href="/busqueda">Búsqueda</a></li>
			        @endif
			        <li @yield('servicios')><a href="/servicios">Servicios</a></li>
			        <li @yield('registro')><a href="/registro">Registro</a></li>
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
				<h1>Pie de página</h1>
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