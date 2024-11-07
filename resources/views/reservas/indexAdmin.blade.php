
@extends('adminlte::page')
@section('title', 'Reservas')

@section('content_header')
    <h1>Bienvenido a la gestion de reservas</h1>
@endsection

@section('content')
    <ul>
        <table class="table table-bordered table-hover dataTable dtr-inline collapsed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Destino_id</th>
                    <th>User_id</th>
                    <th>Fecha</th>
                    <th>Personas</th>
                    <th>Comentarios</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reservas)
                <tr>
                    <!--<th>{{ $reservas->id }}</th>-->
                    <th><button type="button" class="btn btn-block btn-warning"><a href="#">Editar</a></button></th>
                    <th>{{ $reservas->nombre }}</th>
                    <th>{{ $reservas->email }}</th>
                    <th>{{ $reservas->telefono }}</th>
                    <th>{{ $reservas->destino_id }}</th>
                    <th>{{ $reservas->user_id }}</th>
                    <th>{{ $reservas->fecha }}</th>
                    <th>{{ $reservas->personas }}</th>
                    <th>{{ $reservas->comentarios }}</th>
                    <th>{{ $reservas->estado }}</th>
                    <th><button type="button" class="btn btn-block btn-warning"><a href="#">Eliminar</a></button></th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </ul>
@endsection

