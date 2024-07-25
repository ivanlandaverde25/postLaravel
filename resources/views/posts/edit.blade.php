<x-app-layout>

    <a href="{{route('posts.index')}}">
        Regresar al listado
    </a>

    <h1>Formulario para editar el post</h1>
    <form action="{{route('posts.update', $post)}}" method="POST">

        {{-- Token oculto que se envia al momento de llenar un formulario --}}
        @csrf

        {{-- Campo que se utioiza al momento de realizar una accion diferente a POST --}}
        {{-- Puede ser PUT, PATH O DELETE --}}
        @method("PUT")

        {{-- Titulo del post --}}
        <div class="">
            <label for="titulo">
                Titulo
                <input type="text" name="titulo" value="{{$post->titulo}}" style="color: #333333">
            </label>
        </div>
        <br>
        {{-- Slug del post --}}
        <div class="">
            <label for="slug">
                Slug
                <input type="text" name="slug" value="{{$post->slug}}" style="color: #333333">
            </label>
        </div>
        <br>
        {{-- Categoria del post --}}
        <div class="">
            <label for="">
                Categoria
                <input type="text" name="categoria" value="{{$post->titulo}}" style="color: #333333">
            </label>
        </div>
        <br>
        {{-- Detalle del post --}}
        <div class="">
            <label for="">
                Contenido
            </label>
            <textArea name="detalle" style="color: #333333">
                {{$post->detalle}}
            </textArea>
        </div>
        <br>
        {{-- Activar post --}}
        <div class="">
            <label for="mostrar">
                <input type="checkbox" name="mostrar"
                @if($post->mostrar == false) 
                    unchecked
                @else    
                    checked
                @endif>
                Mostrar
            </label>
        </div>
        <br>
        <div class="">
            <button type="submit">
                Modificar post
            </button>
        </div>
    </form>
</x-app-layout>