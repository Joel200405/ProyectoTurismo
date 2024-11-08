<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
    <h1>Editar datos del usuario</h1>

    <form action="{{route('user.update', $user)}}" method="POST">

        <!-- TOKEN de seguridad -->
        @csrf
        <!-- directiva para indicar el metodo PUT -->
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{$user->nombre}}">
        </label>
        @error('nombre')
            <br>
            <small>*{{ $message }}</small>
        @enderror

        <br>
        <label>
            Nombre de usuario:
            <br>
            <!-- el campo "slug" es de tipo STRING -->
            <input type="text" name="username" value="{{ old('username', $user->username) }}">
        </label>
        @error('username')
            <br>
            <small>*{{ $message }}</small>
        @enderror

        <br>
        <label>
            google_id:
            <br>
            <textarea name="google_id" rows="5"> {{$user->google_id}} </textarea>
        </label>
        @error('google_id')
            <br>
            <small>*{{ $message }}</small>
        @enderror

        <br>
        <label>
            is_admin:
            <br>
            <input type="text" name="is_admin" value="{{$user->is_admin}}">
        </label>
        @error('is_admin')
            <br>
            <small>*{{ $message }}</small>
        @enderror

        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
    <!-- BOTON PARA ELIMINAR REGISTRO -->
    <form action="{{ route('user.destroy', $user) }}" method="POST">
        <!-- metodos para TOKEN de seguridad y el metodo delete de la ruta -->
        @csrf
        @method('delete')

        <button type="submit">Eliminar usuario</button>

    </form>
</body>
</html>