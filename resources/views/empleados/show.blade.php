<x-app-layout>
    <h1>
        Aqui mero va la vista de la visualizacion del empleado
    </h1>
    <br>
    <a href="{{route('empleados.index')}}">
        Regrear al listado
    </a>
    <br>
    <a href="{{route('empleados.edit', $empleado->id)}}">
        Editar Registro
    </a>
    <br>
    <form action="{{route('empleados.destroy', $empleado->id)}}" method="POST">
        
        @csrf
        @method("DELETE")

        <button type="submit">
            Elimiar Registro
        </button>
    </form>
    <br><br>

    <h1>Detalles</h1>
    
    <div class="">
        <ul>
            <li>
                Nombres: {{$empleado->nombres . ' ' . $empleado->apellidos}}
            </li>
            <li>
                Telefono: {{$empleado->telefono}}
            </li>
            <li>
                Fecha de ingreso: {{$empleado->fecha_ingreso->format('d/m/Y')}}
            </li>
            <li>
                Salario: {{$empleado->salario}}
            </li>
        </ul>
    </div>

</x-app-layout>