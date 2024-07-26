<x-app-layout>
    <a href="{{route('empresas.index')}}">
        Regresar al listado
    </a>
    <br>
    <a href="{{route('empresas.edit', $empresa)}}">
        Editar registro
    </a>
    <br>
    <form action="{{route('empresas.destroy', $empresa)}}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit">
            Eliminar registro
        </button>
    </form>
    <br>
    <br>
    
    <h1>Detalles de la empresa</h1>  
    
    <br>
    
    <h3>
        Nombre: {{$empresa->nombre}}
    </h3>
    <h3>
        Direccion: {{$empresa->direccion}}
    </h3>
    <h3>
        Fecha de apertura: {{$empresa->fecha_apertura->format('d/m/Y')}}
    </h3>
</x-app-layout>