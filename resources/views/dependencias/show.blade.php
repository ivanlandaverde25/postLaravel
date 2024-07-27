<x-app-layout>
    <h1>Aqui se muestra el registro seleccionado</h1>
    <br>

    <a href="{{route('dependencias.index')}}">
        Regresar al listado
    </a>
    <br><br>

    <a href="{{route('dependencias.edit', $dependencia)}}">
        Editar la dependencia
    </a>
    <br><br>

    <form action="{{route('dependencias.destroy', $dependencia)}}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">
            Eliminar dependencia
        </button>
    </form>
    <br>

    <h2>Detalles de la dependencia</h2>
    <ul>
        <li> Nombre: {{$dependencia->nombre}} </li>
        <li> Nombre corto: {{$dependencia->nombre_corto}} </li>
        <li> Tipo de dependencia: {{$dependencia->tipo_dependencia}} </li>
        <li> Fecha oficial: {{$dependencia->fecha_oficial->format('d/m/Y')}} </li>
        @if ($dependencia->activo == 1)
        <li>Estado: Habilitada</li>
        @else
        <li>Estado: Deshabilitada</li>
        @endif
    </ul>
</x-app-layout>