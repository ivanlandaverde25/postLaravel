<x-app-layout>
    <h1>Aquí vamos a crear un nuevo empleado :)</h1>
    <br>
    <a href="{{route('empleados.index')}}">
        Regresar al listado
    </a>
    <br><br>

    {{-- Errores de campos que se muestran al usuario en caso que no se cumplan las validaciones --}}
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {{-- Formulario de creacion --}}
    <form action="{{route('empleados.store')}}" method="POST">

        {{-- Token unico del formulario --}}
        @csrf

        <div class="">
            <label for="">
                Nombres
            </label>
            <input type="text" name="nombres" id="" style="color: #333333" value="{{old('nombres')}}">
        </div>
        
        <br>
        <div class="">
            <label for="">
                Apellidos
            </label>
            <input type="text" name="apellidos" id="" style="color: #333333" value="{{old('apellidos')}}">
        </div>

        <br>
        <div class="">
            <label for="">
                Slug
            </label>
            <input type="text" name="slug" id="" style="color: #333333" value="{{old('slug')}}">
        </div>
        
        <br>
        <div class="">
            <label for="">
                Telefono
            </label>
            <input type="text" name="telefono" id="" placeholder="####-####" style="color: #333333" value="{{old('telefono')}}">
        </div>
        <br>
        <div class="">
            <label for="">
                Fecha de ingreso
            </label>    
            <input type="date" name="fecha_ingreso" id="" style="color: #333333" value="{{old('fecha_ingreso')}}">
        </div>
        <br>
        <div class="">
            <label for="">
                Salario
            </label>    
            <input type="number" name="salario" step=".01" id="" style="color: #333333" value="{{old('salario')}}">
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