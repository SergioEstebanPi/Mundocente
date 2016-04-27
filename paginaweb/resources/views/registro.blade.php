@extends('layouts.base')

@section('titulo')
	Registro
@stop

@section('registro')
	class="active"
@stop

@section('superior')
	<div class="superior">
		<h1>Registro</h1>
	</div>
@stop

@section('contenido')
	<div class="registro col-md-offset-4 col-md-3">
		<form role="form" action="registro" method="post">
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
		  <button type="submit" class="btn btn-primary">Registrar</button>
		</form>
	</div>
@stop