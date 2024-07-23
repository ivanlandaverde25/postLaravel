<x-app-layout>
    <a href="/empresas">
        Regresar al listado
    </a>
    <br>
    <a href="/empresas/{{$empresa->id}}/edit">
        Editar registro
    </a>
    <br>
    <form action="/empresas/{{$empresa->id}}" method="POST">
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