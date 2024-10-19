<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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
                <div class="dashboard">
                    <div class="card red">
                        <p>User</p>
                        <h3>1</h3>
                    </div>
                    <div class="card blue">
                        <p>Reservaciones</p>
                        <h3>7</h3>
                    </div>
                    <div class="card green">
                        <p>Consultas</p>
                        <h3>4</h3>
                    </div>
                    <div class="card purple">
                        <p>Paquetes totales</p>
                        <h3>5</h3>
                    </div>
                    <div class="card green">
                        <p>Problemas planteados</p>
                        <h3>7</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>