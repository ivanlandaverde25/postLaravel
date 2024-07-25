<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body>
    <h1>Formulario para creacion del post</h1>
    <form action="{{route('posts.store')}}" method="POST">

        @csrf

        {{-- Titulo del post --}}
        <div class="">
            <label for="titulo">
                Titulo
                <input type="text" name="titulo">
            </label>
        </div>
        <br>
        {{-- Slug del post --}}
        <div class="">
            <label for="slug">
                Slug
                <input type="text" name="slug">
            </label>
        </div>
        <br>
        {{-- Categoria del post --}}
        <div class="">
            <label for="">
                Categoria
                <input type="text" name="categoria">
            </label>
        </div>
        <br>
        {{-- Detalle del post --}}
        <div class="">
            <label for="">
                Contenido
            </label>
            <textArea name="detalle">

            </textArea>
        </div>
        <br>
        {{-- Activar post --}}
        <div class="">
            <label for="mostrar">
                <input type="checkbox" name="mostrar" unchecked>
                Mostrar
            </label>
        </div>
        <br>
        <div class="">
            <button type="submit">
                Crear post
            </button>
        </div>
    </form>
</body>
</html>