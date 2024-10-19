<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/crear.css') }}"> <!-- Agregar el CSS del formulario -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <h2>Sistema de Gestión Turística</h2>
            </div>
            <ul class="menu">
                <li><a href="#"><i class="fas fa-home"></i> Panel de Inicio</a></li>
                
                <li><a href="#"><i class="fas fa-map"></i> Paquetes turísticos</a>
                    <ul class="submenu">
                        <li><a href="#">Gestionar Paquetes</a></li>
                        <li><a href="{{ route('paquetes.create') }}"><i class="fas fa-map"></i> Crear Paquete</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fas fa-users"></i> Administrar usuarios</a></li>
                <li><a href="#"><i class="fas fa-calendar-alt"></i> Gestionar reserva</a></li>
                <li><a href="#"><i class="fas fa-exclamation-circle"></i> Administrar problemas</a></li>
                <li><a href="#"><i class="fas fa-file-alt"></i> Gestionar consultas</a></li>
                <li><a href="#"><i class="fas fa-cogs"></i> Administrar páginas</a></li>
            </ul>
        </div>

        <div class="main-content">
            <div class="header">
                <h1>SISTEMA DE GESTIÓN TURÍSTICA</h1>
                <div class="user-info">
                    <span>Bienvenido</span>
                    <span class="role">Administrador</span>
                </div>
            </div>
            <div class="content">
                <div class="form-container"> <!-- Contenedor para el formulario -->
                    <h1>Crear Paquete Turístico</h1>
                    <form action="{{ route('paquetes.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="nombre_paquete">Nombre del paquete</label>
                        <input type="text" name="nombre_paquete" id="nombre_paquete" placeholder="Nombre del paquete" required>

                        <label for="tipo_paquete">Tipo de paquete</label>
                        <input type="text" name="tipo_paquete" id="tipo_paquete" placeholder="Tipo de paquete">

                        <label for="ubicacion_paquete">Ubicación del paquete</label>
                        <input type="text" name="ubicacion_paquete" id="ubicacion_paquete" placeholder="Ubicación del paquete">

                        <label for="precio_paquete">Precio del paquete en USD</label>
                        <input type="number" name="precio_paquete" id="precio_paquete" placeholder="Precio en USD">

                        <label for="caracteristicas_paquete">Características del paquete</label>
                        <input type="text" name="caracteristicas_paquete" id="caracteristicas_paquete" placeholder="Características">

                        <label for="detalles_paquete">Detalles del paquete</label>
                        <textarea name="detalles_paquete" id="detalles_paquete" rows="5"></textarea>

                        <label for="imagen_paquete">Imagen del paquete</label>
                        <input type="file" name="imagen_paquete" id="imagen_paquete">

                        <button type="submit">Crear</button>
                        <button type="reset">Restablecer</button>
                    </form>

                    @if (session('success'))
                        <p>{{ session('success') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
