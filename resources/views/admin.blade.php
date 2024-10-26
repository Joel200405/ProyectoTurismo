<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú lateral</title>

    <link rel="stylesheet" href="{{ asset('css1/estilosAdmin.css') }}">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fab fa-youtube"></i>
            <h4>Menu</h4>
        </div>

        <div class="options__menu">	

            <a href="#" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="#" id="btn-reservas" onclick="loadReservas()">
                <div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <h4>Reservas</h4>
                </div>
            </a>
            
            <a href="#">
                <div class="option">
                    <i class="fas fa-video" title="Cursos"></i>
                    <h4>Videos</h4>
                </div>
            </a>

            <a href="#" id="btn-destinos" onclick="loadDestinos()">
                <div class="option">
                    <i class="far fa-sticky-note" title="Blog"></i>
                    <h4>Destinos</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-id-badge" title="Contacto"></i>
                    <h4>Contacto</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-address-card" title="Nosotros"></i>
                    <h4>Nosotros</h4>
                </div>
            </a>

        </div>

    </div>

    <main>
        <div id="dashboard-content">
            <h1>Title Exemple</h1><br>
        </div>
        
    </main>

    <script src="{{ asset('css1/script.js') }}"></script>

    <script>
        function loadReservas() {
            fetch("{{ route('reservas.admin') }}", {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest' // Para que Laravel lo reconozca como una solicitud AJAX
                }
            })
            .then(response => response.text()) // Laravel devolverá una vista, así que usamos .text()
            .then(html => {
                document.getElementById('dashboard-content').innerHTML = html; // Mostrar la vista cargada
            })
            .catch(error => {
                console.error('Error cargando reservas:', error);
            });
        }
    </script>

    <script>
        function loadDestinos() {
            fetch("{{ route('destinos.admin') }}", {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest' // Para que Laravel lo reconozca como una solicitud AJAX
                }
            })
            .then(response => response.text()) // Laravel devolverá una vista, así que usamos .text()
            .then(html => {
                document.getElementById('dashboard-content').innerHTML = html; // Mostrar la vista cargada
            })
            .catch(error => {
                console.error('Error cargando reservas:', error);
            });
        }
    </script>

=======
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
>>>>>>> 1b71556ac0a96fb01f8076b47e72c14480c62a3b
</body>
</html>