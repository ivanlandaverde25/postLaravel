<x-app-layout>
    <h1>Aquí vamos a crear un nuevo empleado :)</h1>
    <br>
    <a href="{{route('empleados.index')}}">
        Regresar al listado
    </a>
    <br><br>

    {{-- Formulario de creacion --}}
    <form action="{{route('empleados.store')}}" method="POST">

        {{-- Token unico del formulario --}}
        @csrf

        <div class="">
            <label for="">
                Nombres
            </label>
            <input type="text" name="nombres" id="" style="color: #333333">
        </div>
        
        <br>
        <div class="">
            <label for="">
                Apellidos
            </label>
            <input type="text" name="apellidos" id="" style="color: #333333">
        </div>

        <br>
        <div class="">
            <label for="">
                Slug
            </label>
            <input type="text" name="slug" id="" style="color: #333333">
        </div>
        
        <br>
        <div class="">
            <label for="">
                Telefono
            </label>
            <input type="text" name="telefono" id="" placeholder="####-####" style="color: #333333">
        </div>
        <br>
        <div class="">
            <label for="">
                Fecha de ingreso
            </label>    
            <input type="date" name="fecha_ingreso" id="" style="color: #333333">
        </div>
        <br>
        <div class="">
            <label for="">
                Salario
            </label>    
            <input type="number" name="salario" step=".01" id="" style="color: #333333">
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