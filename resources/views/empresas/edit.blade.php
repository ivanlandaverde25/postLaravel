<x-app-layout>
    <h1>
        Editar Registro
    </h1>
    <br>
    <a href="{{route('empresas.index')}}">
        Regresar al listado
    </a>

    @if ($errors->any())
        <div class="">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <br>
    <br>
    <form action="{{route('empresas.update', $empresa)}}" method="POST">

        {{-- Token de seguridad de formulario --}}
        @csrf
        @method("PUT")

        <div class="">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" style="color: #333333" value="{{old('nombre', $empresa->nombre)}}">
        </div>
        <br>
        <div class="">
            <label for="nombre">Slug</label>
            <input type="text" name="slug" style="color: #333333" value="{{old('slug', $empresa->slug)}}">
        </div>
        <br>
        <div class="">
            <label for="direccion">direccion</label>
            <input type="text" name="direccion" style="color: #333333" value="{{old('direccion', $empresa->direccion)}}">
        </div>
        <br>
        <div class="">
            <label for="fecha_apertura">Fecha de apertura</label>
            <input type="date" name="fecha_apertura" style="color: #333333" value="{{old('fecha_apertura', $empresa->fecha_apertura->format('Y-m-d'))}}">
        </div>
        <br>
        <button type="submit" class="btn">
            Editar empresa
        </button>
    </form>
</x-app-layout>