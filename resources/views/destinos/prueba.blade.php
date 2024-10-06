@extends('layouts.general')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinos</title>
    <link rel="stylesheet" href="{{ asset('css/styleDestinosIndex.css') }}">
</head>
<body>
    <div class="container">
        <!-- Primera tarjeta de destino -->
        <div class="card">
            <img src="{{ asset('css1/img/img2.jpg') }}" alt="Roma">
            <h2>Roma</h2>
            <div class="card-info">
                <h2>Paradise Island</h2>
                <p>A stunning getaway with crystal clear waters and white sand beaches.</p>
                <a href="#" class="reserve-button">Reserve Now</a>
            </div>
        </div>

        <!-- Segunda tarjeta de destino -->
        <div class="card">
            <img src="{{ asset('css1/img/img3.jpg') }}" alt="Roma">
            <h2>Roma</h2>
            <div class="card-info">
                <h2>Mountain Escape</h2>
                <p>Experience the tranquility of the mountains and lush forests.</p>
                <a href="#" class="reserve-button">Reserve Now</a>
            </div>
        </div>

        <!-- Puedes agregar más tarjetas según sea necesario -->
    </div>
</body>
</html>
