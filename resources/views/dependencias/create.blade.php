<x-app-layout>
    <h1>
        Aqui vamos a crear una nueva dependencia
    </h1>
    <br>
    <a href="{{route('dependencias.index')}}">
        Regresar al listado
    </a>
    <br><br>

    {{-- Mostrar errores de validacion de campos al usuario --}}
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif

    {{-- Formulario de creacion --}}
    <form action="{{route('dependencias.store')}}" method="POST">

        @csrf

        <label for="">Complete los siguientes campos</label>
        <br><br>

        {{-- Nombre --}}
        <div class="">
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="" value="{{old('nombre')}}" style="color: #333333">
        </div>
        <br>

        {{-- nombre corto --}}
        <div class="">
            <label for="">Nombre corto</label>
            <input type="text" name="nombre_corto" id="" value="{{old('nombre_corto')}}" style="color: #333333">
        </div>
        <br>

        {{-- nombre tipo dependencia --}}
        <div class="">
            <label for="">Tipo de dependencia</label>
            <input type="text" list="tipoDependencia" name="tipo_dependencia" id="" value="{{old('tipo_dependencia')}}" style="color: #333333">
            <datalist id="tipoDependencia">
                <option value="Oficial">Oficial</option>
                <option value="No Oficial">No Oficial</option>
            </datalist>
        </div>
        <br>

        {{-- fecha oficial --}}
        <div class="">
            <label for="">Fecha oficial</label>
            <input type="date" name="fecha_oficial" id="" value="{{old('fecha_oficial')}}" style="color: #333333">
        </div>
        <br>

        {{-- Slug --}}
        <div class="">
            <label for="">Slug</label>
            <input type="text" name="slug" id="" value="{{old('slug')}}" style="color: #333333">
        </div>
        <br>

        {{-- Boton Enviar --}}
        <button type="submit">
            Crear dependencia
        </button>
    </form>
</x-app-layout>