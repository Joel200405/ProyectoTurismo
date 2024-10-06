<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- favicon -->
    
    <!-- estilos -->
    

</head>
<body>
    <!-- header -->
    <header class="header">
        <div class="logo">Destinos Turisticos</div>
        <ul class="menu">
            <li><a href="{{ route('home.index') }}">Inicio</a></li>
            <li><a href="{{ route('destinos.index') }}">Destinos Turisticos</a></li>
            <li><a href="{{ route('reservas.index') }}">Reservas</a></li>
            <li><a href="{{ route('login.index') }}">Login</a></li>
        </ul>
    </header>

    <!-- nav -->
    <!-- content -->
    @yield('content')
    <!-- footer -->
    @yield('script')
</body>
</html>