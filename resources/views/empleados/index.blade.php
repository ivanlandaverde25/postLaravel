<x-app-layout>
    <h1>
        Listado de empleados :)
    </h1>
    <br>
    <a href="/empleados/create">
        Crear nuevo registro
    </a>
    <br><br>
    @foreach ($empleados as $empleado)
        <ul>
            <li>
                <a href="">
                        {{$empleado->nombres. ' ' .$empleado->apellidos}} 
                </a>
            </li>
        </ul>
    @endforeach
</x-app-layout>