<x-app-layout>

    <h1>Aqui vemos el registro seleccionado</h1>
    <br>

    {{-- Acciones --}}
    <a href="{{route('proveedores.index')}}">
        Regresar al listado
    </a>
    <br>

    <a href="{{route('proveedores.edit', $proveedor)}}">
        Editar registro
    </a>
    <br>

    <form action="{{route('proveedores.destroy', $proveedor)}}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit">
            Eliminar registro
        </button>
    </form>
    <br>

    <h2>Detalles</h2>
    <ul>
        <li>Nombre: {{$proveedor->nombre}}</li>
        <li>Nombre corto: {{$proveedor->nombre_corto}}</li>
        <li>Direccion: {{$proveedor->direccion}}</li>
        <li>Telefono: {{$proveedor->telefono}}</li>
        @if ($proveedor->activo == 1)
            <li>Estado: Activo</li>
            @else
            <li>Estado: Inactivo</li>
        @endif
    </ul>


</x-app-layout>