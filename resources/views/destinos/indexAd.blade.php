@extends('adminlte::page')
@section('title', 'Administrar Destinos')

@section('content_header')
    <h1>Bienvenido</h1>
@endsection


@section('content')
    <ul>
        <table class="table table-bordered table-hover dataTable dtr-inline collapsed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Ubicacion</th>
                    <th>Precio</th>
                    <th>Popular</th>
                    <th>Imagen_url</th>
                </tr>
            </thead>
            <tbody>
                @foreach($destinos as $destino)
                <tr>
                    <!--<th>{{ $destino->id }}</th>-->
                    <th><button type="button" class="btn btn-block btn-warning"><a href="#">Editar</a></button></th>
                    <th>{{ $destino->nombre }}</th>
                    <th>{{ $destino->descripcion }}</th>
                    <th>{{ $destino->ubicacion }}</th>
                    <th>{{ $destino->precio }}</th>
                    <th>{{ $destino->popular }}</th>
                    <th>{{ $destino->imagen_url }}</th>
                    <th><button type="button" class="btn btn-block btn-warning"><a href="#">Eliminar</a></button></th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </ul>
@endsection