<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Fuentes y scripts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    
    <!-- Encabezado -->
    <header>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

        <link rel="stylesheet" href="{{ asset('css1/style.css') }}">

        <div class="header">
            <div class="logo">Destinos Turisticos</div>
            <ul class="menu">
                <li>Inicio</li>
                <li>Destinos Turisticos</li>
                <li><a href="#">Reservas</a></li>
                <li>login</li>
            </ul>

        </div>
    </header>

    <!-- Contenido dinámico -->
    
    @yield('content')
    

    <!-- Pie de página -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-info">
                <h4>Contáctenos</h4>
                <p>Teléfono: +51 123 456 789</p>
                <p>Email: grupo01@continental.edu.pe</p>
            </div>
            
            <!-- Formulario de contacto -->
            <div class="footer-contact-form">
                <h4>Déjanos un mensaje</h4>
                <div class="alert alert-success" style="display: none;"></div>
                <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <input type="text" id="name" name="name" class="footer-input" placeholder="Nombre" required>
                    <input type="email" id="email" name="email" class="footer-input" placeholder="Email" required>
                    <textarea id="message" name="message" class="footer-textarea" rows="4" placeholder="Comentario" required></textarea>
                    <button type="submit" class="footer-button">Enviar Mensaje</button>
                </form>
            </div>
            
            <!-- Copyright -->
            <div class="footer-copyright">
                &copy; {{ date('Y') }} Grupo 01. Todos los derechos reservados.
            </div>
        </div>
    </footer>

    <!-- Script para manejo del formulario -->
    <script>
        $(document).ready(function() {
            $('#contactForm').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function(response) {
                        $('.alert.alert-success').text(response.success).show();
                        $('#contactForm')[0].reset();
                        setTimeout(function() {
                            $('.alert.alert-success').fadeOut(500);
                        }, 5000);
                    },
                    error: function(xhr) {
                        // Manejo de errores
                    }
                });
            });
        });
    </script>

</body>
</html>