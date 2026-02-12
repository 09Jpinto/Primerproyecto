@extends('layouts.app')
@section('titulopagina','Empresa E-comerce')
@push ('css')
<style>
    .fondo {
        background-color: #302886;
        }
    .ima-responsive{
        width: 100%;
        height: 100%;
    }
</style>
@endpush

@section('titulo')
    Bivenido a la página de EC 
@endsection

@section('link1','Active')
@section('titulo1')
    <h1>About Me</h1>
@endsection
@section("descripcion_about")
    {{ $descripcion_about }}
@endsection
@section("Autor")
    {{ $nombre }}
@endsection
@section("actividad",$actividad)
@section("texto_ejemplo")
    {{ $texto_ejemplo }}
@endsection
@section("contenido_listado")
    <h2>Listado de Usuarios Registrados</h2>
    <ul>
        @if(isset($listadousuarios))
            <table id='tablausaurios' class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Calle</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($listadousuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->correo }}</td>
                        <td>{{ $usuario->telefono }}</td>
                        <td>{{ $usuario->calle }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>La variable de lsitado de usuarios no está definida</p>
        @endif
    </ul>
@endsection
