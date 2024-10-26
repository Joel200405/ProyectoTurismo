<!DOCTYPE html>
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

</body>
</html>