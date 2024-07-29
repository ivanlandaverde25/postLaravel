<x-app-layout>
    <h1>Aqui vamos a editar el registro seleccionado</h1>
    <br>

    <a href="{{route('proveedores.show', $proveedor)}}">
        Cancelar
    </a>
    <br><br>

    <a href="{{route('proveedores.index')}}">
        Regresar al listado
    </a>
    <br><br>

    {{-- Seccion donde se van a mostrar los errores de validaciones de campos --}}
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
        <br>
    @endif

    <h2>Edite los siguientes campos</h2>
    <form method="POST" action="{{route('proveedores.update', $proveedor)}}">
        
        @csrf
        @method("PUT")

        {{-- Nombre --}}
        <div class="">
            <label for="">Nombre del proveedor</label>
            <input type="text" name="nombre" value="{{old('nombre', $proveedor->nombre)}}" style="color: #333333">
        </div>
        <br>

        {{-- Nombre corto --}}
        <div class="">
            <label for="">Nombre corto del proveedor</label>
            <input type="text" name="nombre_corto" value="{{old('nombre_corto', $proveedor->nombre_corto)}}" style="color: #333333">
        </div>
        <br>
        
        {{-- Direccion --}}
        <div class="">
            <label for="">Direccion del proveedor</label>
            <input type="text" name="direccion" value="{{old('direccion', $proveedor->direccion)}}" style="color: #333333">
        </div>
        <br>
        
        {{-- Telefono --}}
        <div class="">
            <label for="">Telefono del proveedor</label>
            <input type="text" name="telefono" value="{{old('telefono', $proveedor->telefono)}}" placeholder="####-####" style="color: #333333">
        </div>
        <br>
        
        {{-- Activo --}}
        <div class="">
            <label for="">Proveedor activo</label>
            <input type="checkbox" name="activo" value="{{old('activo', $proveedor->activo)}}" unchecked style="color: #333333">
        </div>
        <br>

        {{-- Slug --}}
        <div class="">
            <label for="">Slug del proveedor</label>
            <input type="text" name="slug" value="{{old('slug', $proveedor->slug)}}" style="color: #333333">
        </div>
        <br>

        {{-- Boton enviar --}}
        <button type="submit">
            Actualizar proveedor
        </button>
    </form>

</x-app-layout>