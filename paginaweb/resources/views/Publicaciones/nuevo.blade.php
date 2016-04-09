<h1>NUEVO</h1>
<form action="/publicaciones/nuevo" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
	<input type="numeric" name="id" placeholder="id"></input>
	<input type="text" name="nombre" placeholder="nombre"></input>

	<input type="submit" value="Agregar"></input>
</form>