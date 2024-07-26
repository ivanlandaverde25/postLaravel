<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body style="background-color: #333333; color: #FAFAFA;">
    <h1>Formulario para creacion del post</h1>

    {{-- Los errores se pueden manejar tanto a nivel de lista de esta manera --}}
    @if ($errors->any())
        <div class="">
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('posts.store')}}" method="POST">

        @csrf

        {{-- Titulo del post --}}
        <div class="">
            <label for="titulo">
                Titulo
                <input type="text" name="titulo" style="color: #333333;" value="{{old('titulo')}}">
            </label>
        </div>

        {{-- Como a nivel de cada uno de los campos para mostrarlo mas personalizado --}}
        {{-- @error('titulo')
        <p>{{$message}}</p>
        @enderror --}}
        <br>


        {{-- Slug del post --}}
        <div class="">
            <label for="slug">
                Slug
                <input type="text" name="slug" style="color: #333333;" value="{{old('slug')}}">
            </label>
        </div>
        <br>
        {{-- Categoria del post --}}
        <div class="">
            <label for="">
                Categoria
                <input type="text" name="categoria" style="color: #333333;" value="{{old('categoria')}}">
            </label>
        </div>
        <br>
        {{-- Detalle del post --}}
        <div class="">
            <label for="">
                Contenido
            </label>
            <textArea name="detalle" style="color: #333333;" {{old('detalle')}}>

            </textArea>
        </div>
        <br>
        {{-- Activar post --}}
        <div class="">
            <label for="mostrar">
                <input type="checkbox" name="mostrar" unchecked style="color: #333333;" value="{{old('mostrar')}}">
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