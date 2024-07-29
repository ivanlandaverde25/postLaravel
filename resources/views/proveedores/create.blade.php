<x-app-layout>
    <h1>Aqui registramos un nuevo proveedor</h1>
    <br>

    <a href="{{route('proveedores.index')}}">
        Regresar al listado
    </a>
    <br><br>

    {{-- Seccion donde se muestran los errores por validaciones de campos --}}
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="accent-pink-500">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
        <br>
    @endif

    <h2>Complete los siguientes datos</h2>
    <br>
    <form method="POST" action="{{route('proveedores.store')}}">
        @csrf

        {{-- Nombre --}}
        <div class="">
            <label for="">Nombre del proveedor</label>
            <input type="text" name="nombre" value="{{old('nombre')}}" style="color: #333333">
        </div>
        <br>

        {{-- Nombre corto --}}
        <div class="">
            <label for="">Nombre corto del proveedor</label>
            <input type="text" name="nombre_corto" value="{{old('nombre_corto')}}" style="color: #333333">
        </div>
        <br>
        
        {{-- Direccion --}}
        <div class="">
            <label for="">Direccion del proveedor</label>
            <input type="text" name="direccion" value="{{old('direccion')}}" style="color: #333333">
        </div>
        <br>
        
        {{-- Telefono --}}
        <div class="">
            <label for="">Telefono del proveedor</label>
            <input type="text" name="telefono" value="{{old('telefono')}}" placeholder="####-####" style="color: #333333">
        </div>
        <br>
        
        {{-- Activo --}}
        <div class="">
            <label for="">Proveedor activo</label>
            <input type="checkbox" name="activo" value="{{old('activo')}}" unchecked style="color: #333333">
        </div>
        <br>

        {{-- Slug --}}
        <div class="">
            <label for="">Slug del proveedor</label>
            <input type="text" name="slug" value="{{old('slug')}}" style="color: #333333">
        </div>
        <br>

        {{-- Boton enviar --}}
        <button type="submit">
            Guardar proveedor
        </button>

    </form>

</x-app-layout>