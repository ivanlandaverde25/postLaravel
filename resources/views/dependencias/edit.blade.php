<x-app-layout>
    <h1>Editar dependencia seleccionada</h1>
    <br>
    <a href="{{route('dependencias.index')}}">
        Regresar al listado
    </a>
    <br><br>
    <a href="{{route('dependencias.show', $dependencia)}}">
        Regresar al registro
    </a>
    <br><br>

    {{-- Errores mostrados por las validaciones de campos --}}
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error) 
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <br>
    <h2>Edite los campos del registro</h2>
    <form action="{{route('dependencias.update', $dependencia)}}" method="POST">
        @csrf
        @method('PUT')

                {{-- Nombre --}}
                <div class="">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="" value="{{old('nombre', $dependencia->nombre)}}" style="color: #333333">
                </div>
                <br>
        
                {{-- nombre corto --}}
                <div class="">
                    <label for="">Nombre corto</label>
                    <input type="text" name="nombre_corto" id="" value="{{old('nombre_corto', $dependencia->nombre_corto)}}" style="color: #333333">
                </div>
                <br>
        
                {{-- nombre tipo dependencia --}}
                <div class="">
                    <label for="">Tipo de dependencia</label>
                    <input type="text" list="tipoDependencia" name="tipo_dependencia" id="" value="{{old('tipo_dependencia', $dependencia->tipo_dependencia)}}" style="color: #333333">
                    <datalist id="tipoDependencia">
                        <option value="Oficial">Oficial</option>
                        <option value="No Oficial">No Oficial</option>
                    </datalist>
                </div>
                <br>
        
                {{-- fecha oficial --}}
                <div class="">
                    <label for="">Fecha oficial</label>
                    <input type="date" name="fecha_oficial" id="" value="{{old('fecha_oficial', $dependencia->fecha_oficial->format('Y-m-d'))}}" style="color: #333333">
                </div>
                <br>
        
                {{-- Slug --}}
                <div class="">
                    <label for="">Slug</label>
                    <input type="text" name="slug" id="" value="{{old('slug', $dependencia->slug)}}" style="color: #333333">
                </div>
                <br>
        
                {{-- Boton Enviar --}}
                <button type="submit">
                    Actualizar dependencia
                </button>
    </form>
</x-app-layout>