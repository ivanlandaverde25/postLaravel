<x-app-layout>
    <h1>Aqui vemos el listado de los proveedores</h1>
    {{-- Ejemplo de como mostrar mensajes de laravel traducidos al espa;ol alv --}}
    {{__('Failed Dependency')}}
    <br>
    <a href="{{route('proveedores.create')}}">
        Registrar nuevo proveedor
    </a>

    <br><br>
    <h2>Listado de proveedores</h2>
    <br>

    <ul>
        @foreach ($proveedores as $proveedor)
            <ul>
                <a href="{{route('proveedores.show', $proveedor)}}">
                    {{$proveedor->nombre}}
                </a>
            </ul>
        @endforeach
    </ul>

    {{$proveedores->links()}}
</x-app-layout>