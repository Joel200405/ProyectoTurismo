@extends('layouts.plantillaReserva')

@section('title', 'Crear Reserva')

<link rel="stylesheet" href="{{ asset('css1/stylereserva.css') }}">

@section('content')
    <div class="container">
        <!-- Formulario de reserva -->
        <div class="form-container">
            <h2>Reserva tu destino</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('reservas.store') }}" method="POST">
                @csrf

                <input type="hidden" name="destino_id" value="{{ $destino->id }}">

                <label for="nombre">Nombre del Cliente:</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>

                @error('nombre')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>

                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" value="{{ old('telefono') }}" required>

                @error('telefono')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="fecha">Fecha de la Reserva:</label>
                <input type="date" id="fecha" name="fecha" value="{{ old('fecha') }}" required>

                @error('fecha')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="personas">Número de Personas:</label>
                <input type="number" id="personas" name="personas" value="{{ old('personas') }}" required min="1">

                @error('personas')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="comentarios">Mensaje Adicional:</label>
                <textarea id="comentarios" name="comentarios">{{ old('comentarios') }}</textarea>

                <button type="submit">Reservar</button>
            </form>
        </div>

        <!-- Información adicional al lado derecho -->
        <div class="info-adicional">
            <h3>Información Adicional</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel dolor at urna feugiat aliquet. 
                Suspendisse potenti. Nulla facilisi. Donec nec eros eget nisl fringilla commodo. Sed sit amet ipsum 
                ac neque fermentum luctus. Integer at consequat nisl. Pellentesque habitant morbi tristique senectus 
                et netus et malesuada fames ac turpis egestas.
            </p>
        </div>
    </div>
@endsection