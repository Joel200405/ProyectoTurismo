@extends('adminlte::page')
@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios registrados</h1>
@endsection

@section('content')
    <button type="button" class="btn btn-warning"><a href="{{route('register.adminindex')}}">Registar Nuevo usuario Admin</a></button>
    <br>
    <ul>
        <table class="table table-bordered table-hover dataTable dtr-inline collapsed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Username</th>
                    <th>google_id</th>
                    <th>id_admin</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="bg-primary">
                    <!--<th>{{ $user->id }}</th>-->
                    <th><button type="button" class="btn btn-block btn-warning"><a href="#">Editar</a></button></th>
                    <th>{{ $user->nombre }}</th>
                    <th>{{ $user->username }}</th>
                    <th>{{ $user->google_id }}</th>
                    <th>{{ $user->is_admin }}</th>

                    
                    <th><button type="button" class="btn btn-block btn-warning"><a href="#">Eliminar</a></button></th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </ul>
@endsection