<x-app-layout>

    <a href="{{route('posts.index')}}">Volver al listado</a>

    <br>
    <br>

    <a href="{{route('posts.edit', $post)}}">Editar registro</a>

    <br>
    <br>

    <form action="{{route('posts.destroy', $post)}}" method="POST">

        {{-- ESTE TOKEN SIEMPRE SE DEBE ENVIAR AL MOMENTO DE REALIZAR UN FORMULARIO!!!!! --}}
        @csrf

        {{-- METODO DELETE PA FUNAR DE LA BASE ALV --}}
        @method("DELETE")

        <button type="submit">
            Eliminar post
        </button>
    </form>

    <h1>Detalles del post</h1>
    <h2>Titulo: {{$post->titulo}}</h2>
    <h2>Slug: {{$post->slug}}</h2>
    <h3>Categoria: {{$post->categoria}}</h3>
    <section>
        {{$post->detalle}}
    </section>
    
    <h3>
        Fecha de publicacion:
            @if ($post->fecha_publicacion == null)
                 Pendiente de publicar
            @else
                {{$post->fecha_publicacion->format('d/m/Y')}}
            @endif
    </h3>

</x-app-layout>