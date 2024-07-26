<x-app-layout>
    <h1>
        Aqui vamos a editar un registro
    </h1>
    <br>

    <a href="{{route('empleados.index')}}">
        Regresar al listado
    </a>
    <br><br>

    {{-- Errores que se muetran al usuario con relacion a las validaciones de los campos --}}
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {{-- Formulario de creacion --}}
    <form action="{{route('empleados.update', $empleado)}}" method="POST">

        {{-- Token unico del formulario --}}
        @csrf
        @method ('PUT')

        <div class="">
            <label for="">
                Nombres
            </label>
            <input type="text" name="nombres" id="" style="color: #333333" value="{{old('nombres', $empleado->nombres)}}">
        </div>
        <br>
        <div class="">
            <label for="">
                Apellidos
            </label>
            <input type="text" name="apellidos" id="" style="color: #333333" value="{{old('apellidos', $empleado->apellidos)}}">
        </div>
        
        <br>
        <div class="">
            <label for="">
                Slug
            </label>
            <input type="text" name="slug" id="" style="color: #333333" value="{{old('slug', $empleado->slug)}}">
        </div>
        <br>
        
        <div class="">
            <label for="">
                Telefono
            </label>
            <input type="text" name="telefono" id="" placeholder="####-####" style="color: #333333" value="{{old('telefono', $empleado->telefono)}}">
        </div>
        <br>
        <div class="">
            <label for="">
                Fecha de ingreso
            </label>    
            <input type="date" name="fecha_ingreso" id="" style="color: #333333" value="{{old('fecha_ingreso', $empleado->fecha_ingreso->format('Y-m-d'))}}">
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