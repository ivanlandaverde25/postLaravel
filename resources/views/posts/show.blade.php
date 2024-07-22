<x-app-layout>

    <a href="/posts">Volver al listado</a>
    <br>
    <br>
    <a href="/posts/{{$posts->id}}/edit">Editar registro</a>
    <br>
    <h1>Detalles del post</h1>
    <h2>Titulo: {{$posts->titulo}}</h2>
    <h3>Categoria: {{$posts->categoria}}</h3>
    <section>
        {{$posts->detalle}}
    </section>
    
    <h3>Fecha de publicacion: {{$posts->fecha_publicacion->format('d/m/Y')}}</h3>

</x-app-layout>