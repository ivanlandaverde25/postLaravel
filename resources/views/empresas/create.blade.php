<x-app-layout>
    <h1>
        Esta es la vista para crear un formulario :)
        <br>
        <br>
        <a href="{{route('empresas.index')}}">
            Regresar al listado
        </a>
        <br>
        <br>
        {{-- Aqui se muestran los errores --}}
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
        <form action="{{route('empresas.store')}}" method="POST">

            {{-- Token de seguridad de formulario --}}
            @csrf

            <div class="">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" style="color: #333333" value="{{old('nombre')}}">
            </div>
            <br>
            <div class="">
                <label for="nombre">Slug</label>
                <input type="text" name="slug" style="color: #333333" value="{{old('slug')}}">
            </div>
            <br>
            <div class="">
                <label for="direccion">direccion</label>
                <input type="text" name="direccion" style="color: #333333" value="{{old('direccion')}}">
            </div>
            <br>
            <div class="">
                <label for="fecha_apertura">Fecha de apertura</label>
                <input type="date" name="fecha_apertura" style="color: #333333" value="{{old('fecha_apertura')}}">
            </div>
            <br>
            <button type="submit">
                Crear empresa
            </button>
        </form>
    </h1>
</x-app-layout>