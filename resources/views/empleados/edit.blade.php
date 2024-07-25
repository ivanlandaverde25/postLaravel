<x-app-layout>
    <h1>
        Aqui vamos a editar un registro
    </h1>
    <br>

    <a href="{{route('empleados.index')}}">
        Regresar al listado
    </a>
    <br><br>

    {{-- Formulario de creacion --}}
    <form action="{{route('empleados.update', $empleado->id)}}" method="POST">

        {{-- Token unico del formulario --}}
        @csrf
        @method ('PUT')

        <div class="">
            <label for="">
                Nombres
            </label>
            <input type="text" name="nombres" id="" style="color: #333333" value="{{$empleado->nombres}}">
        </div>
        <br>
        <div class="">
            <label for="">
                Apellidos
            </label>
            <input type="text" name="apellidos" id="" style="color: #333333" value="{{$empleado->apellidos}}">
        </div>
        <br>
        <div class="">
            <label for="">
                Telefono
            </label>
            <input type="text" name="telefono" id="" placeholder="####-####" style="color: #333333" value="{{$empleado->telefono}}">
        </div>
        <br>
        <div class="">
            <label for="">
                Fecha de ingreso
            </label>    
            <input type="date" name="fecha_ingreso" id="" style="color: #333333" value="{{$empleado->fecha_ingreso->format('Y-m-d')}}">
        </div>
        <br>
        <div class="">
            <label for="">
                Salario
            </label>    
            <input type="number" name="salario" step=".01" id="" style="color: #333333" value="{{$empleado->salario}}">
        </div>
        <br>
        <div class="">
            <button type="submit">
                Guardar registro
            </button>
        </div>
        <br>

    </form>

</x-app-layout>