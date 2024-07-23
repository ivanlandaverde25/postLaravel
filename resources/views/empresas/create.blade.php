<x-app-layout>
    <h1>
        Esta es la vista para crear un formulario :)
        <br>
        <br>
        <a href="/empresas">
            Regresar al listado
        </a>
        <br>
        <br>
        <form action="/empresas" method="POST">

            {{-- Token de seguridad de formulario --}}
            @csrf

            <div class="">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" style="color: #333333">
            </div>
            <br>
            <div class="">
                <label for="direccion">direccion</label>
                <input type="text" name="direccion" style="color: #333333">
            </div>
            <br>
            <div class="">
                <label for="fecha_apertura">Fecha de apertura</label>
                <input type="date" name="fecha_apertura" style="color: #333333">
            </div>
            <br>
            <button type="submit">
                Crear empresa
            </button>
        </form>
    </h1>
</x-app-layout>