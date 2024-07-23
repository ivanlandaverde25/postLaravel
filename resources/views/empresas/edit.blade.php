<x-app-layout>
    <h1>
        Editar Registro
    </h1>
    <br>
    <a href="/empresas">
        Regresar al listado
    </a>
    <br>
    <br>
    <form action="/empresas/{{$empresa->id}}" method="POST">

        {{-- Token de seguridad de formulario --}}
        @csrf
        @method("PUT")

        <div class="">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" style="color: #333333" value="{{$empresa->nombre}}">
        </div>
        <br>
        <div class="">
            <label for="direccion">direccion</label>
            <input type="text" name="direccion" style="color: #333333" value="{{$empresa->direccion}}">
        </div>
        <br>
        <div class="">
            <label for="fecha_apertura">Fecha de apertura</label>
            <input type="date" name="fecha_apertura" style="color: #333333" value="{{$empresa->fecha_apertura->format('d/m/Y')}}">
        </div>
        <br>
        <button type="submit">
            Editar empresa
        </button>
    </form>
</x-app-layout>