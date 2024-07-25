<x-app-layout>
    <h1>
        Listado de empleados :)
    </h1>
    <br>
    <a href="{{route('empleados.create')}}">
        Crear nuevo registro
    </a>
    <br><br>
    @foreach ($empleados as $empleado)
        <ul>
            <li>
                <a href="{{route('empleados.show', $empleado)}}">
                        {{$empleado->nombres. ' ' .$empleado->apellidos}} 
                </a>
            </li>
        </ul>
    @endforeach

    {{$empleados->links()}}
</x-app-layout>