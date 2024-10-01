<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Destinos</title>
</head>
<body>
    <h1>Destinos</h1>
    <ul>
        @foreach($destinos as $destino)
            <li>
                <a href="{{ route('destinos.show', $destino->id) }}">{{ $destino->nombre }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>