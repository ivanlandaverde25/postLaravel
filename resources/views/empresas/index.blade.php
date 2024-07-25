<x-app-layout>
    <h1>Soy el listado de empresas :)</h1>
    <br>
    <a href="{{route('empresas.create')}}">
        Crear nueva empresa
    </a>
    <br>
    <br>
    @foreach ($empresas as $empresa)
        <h4>
            <ul>
                <li>
                    <a href="{{route('empresas.show', $empresa->id)}}">
                        {{ $empresa->nombre}}
                    </a>
                </li>
            </ul>
        </h4>
    @endforeach
    {{$empresas->links()}}
</x-app-layout>