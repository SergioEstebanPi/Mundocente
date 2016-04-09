<h1>LISTA</h1>
<h3>Lista de publicaciones</h3>

@foreach($publicaciones as $publicacion)
	<p>
		ID: {{ $publicacion->id_publicacion }}
		Nombre: {{ $publicacion->nombre_publicacion }}
	</p>
@endforeach