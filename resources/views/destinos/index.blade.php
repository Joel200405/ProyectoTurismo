@extends('layouts.general')

<link rel="stylesheet" href="{{ asset('css/styleDIndex.css') }}">

@section('content')

<section class="destinos">
    <h1>Principales Destinos</h1>
    <h1>°°°°°°°°°°°°°°°°°°°°°°</h1>
        <div class="destino-display">
            <div class="destino-wrapper">
                <div class="card">
                    <img src="{{ asset('css1/img/img2.jpg') }}" alt="Destino 1">
                    <div class="card-info">
                        <h2>Restos Arqueológicos de Colcas</h2>
                        <p> Se encuentran a aproximadamente a 3.5 Km. al lado este de la localidad de Carhuacayán</p>
                        <a href="#" class="reserve-button">Reservar</a>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('css1/img/img3.jpg') }}" alt="Destino 2">
                    <div class="card-info">
                        <h2>Restos Arqueológicos de Marcamarcán</h2>
                        <p>Los restos pre incas que significa en español, PUEBLO SOBRE PUEBLOS</p>
                        <a href="#" class="reserve-button">Reservar</a>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('css1/img/img4.jpg') }}" alt="Destino 3">
                    <div class="card-info">
                        <h2>Baños Termomedicinales de Collpa</h2>
                        <p>Esta situado al oeste de Carhuacayán, a 3.5 kms, aguas de diferentes temperaturas</p>
                        <a href="#" class="reserve-button">Reservar</a>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('css1/img/img5.jpg') }}" alt="Destino 3">
                    <div class="card-info">
                        <h2>Lagunas de Hueghue y Taprash</h2>
                        <p>Laguna situada al lado sur de la localidad, aproximadamente a 4 Km.</p>
                        <a href="#" class="reserve-button">Reservar</a>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('css1/img/img2.jpg') }}" alt="Destino 1">
                    <div class="card-info">
                        <h2>Laguna de Llactamachay</h2>
                        <p>Laguna de aguas cristalinas, cuya salida del ojo de manantial alimenta una parte a la Población</p>
                        <a href="#" class="reserve-button">Reservar</a>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('css1/img/img3.jpg') }}" alt="Destino 2">
                    <div class="card-info">
                        <h2>Laguna de Tuctococha</h2>
                        <p>Laguna situada a la parte occidental de la localidad de Carhuacayán, con una variedad de la fauna silvestre,</p>
                        <a href="#" class="reserve-button">Reservar</a>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('css1/img/img4.jpg') }}" alt="Destino 3">
                    <div class="card-info">
                        <h2>La Bella Durmiente de Carhuacayán</h2>
                        <p>Al lado norte de la localidad de Santa Bárbara de Carhuacayán. Se encuentran los cerros de Condorcenga</p>
                        <a href="#" class="reserve-button">Reservar</a>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('css1/img/img5.jpg') }}" alt="Destino 3">
                    <div class="card-info">
                        <h2>Laguna de Puricocha y Lucmacocha</h2>
                        <p>Lagunas situadas al lado Nor. este de la localidad de Carhuacayan, al pie del cerro de San Antonio y Shaguag</p>
                        <a href="#" class="reserve-button">Reservar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-buttons">
            <button class="nav-button left" onclick="moveDestinos(-1)">&#10094;</button>
            <button class="nav-button right" onclick="moveDestinos(1)">&#10095;</button>
        </div>
</section>

@endsection

@section('scripts')
<script src="{{ asset('js/destinosIndex.js') }}"></script>
@endsection