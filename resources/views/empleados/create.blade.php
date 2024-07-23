<x-app-layout>
    <h1>Aquí vamos a crear un nuevo empleado :)</h1>
    <br>
    <a href="/empleados">
        Regresar al listado
    </a>
    <br><br>

    {{-- Formulario de creacion --}}
    <form action="/empleados" method="POST">

        {{-- Token unico del formulario --}}
        @csrf

    </form>
</x-app-layout>