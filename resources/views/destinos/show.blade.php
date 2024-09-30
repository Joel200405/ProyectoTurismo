<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $destino->nombre }}</title>
</head>
<body>
    <h1>{{ $destino->nombre }}</h1>
    <p><strong>Descripción:</strong> {{ $destino->descripcion }}</p>
    <p><strong>Ubicación:</strong> {{ $destino->ubicacion }}</p>
    <p><strong>Precio:</strong> ${{ $destino->precio }}</p>
    <img src="{{ $destino->imagen_url }}" alt="{{ $destino->nombre }}">
    <br>
    <a href="{{ route('destinos.index') }}">Volver a la lista de destinos</a>
</body>
</html>