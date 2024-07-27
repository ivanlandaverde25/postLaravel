<x-app-layout>
    <h1>Aqui vamos a ver el listado de dependencias</h1>
    <br>

    <a href="{{route('dependencias.create')}}">
        Crear nueva dependencia
    </a>

    <br><br>
    <ul>
        @foreach($dependencias as $dependencia) 
            <li>
                <a href="{{route('dependencias.show', $dependencia)}}">
                    {{$dependencia->nombre}}
                </a>
            </li>
        @endforeach
    </ul>
    {{$dependencias->links()}}
</x-app-layout>