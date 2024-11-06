<!-- resources/views/partials/header.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEPEN</title>
    <link rel="stylesheet" href="/public/css/header.css">
</head>
<body>
<header>
    <nav class="navbar">
        <div class="logo">
            <a href="{{ route('paginaprincipal')}}"><img src="{{ asset('/imgs/CEPEN_logo.png') }}" alt="CEPEN Logo"></a>
        </div>
        
        <div class="nav-right">
            <ul class="nav-menu">
                <li><a href="{{route('paginaprincipal')}}#carreras profesionales">Carreras</a></li>
                <li><a href="{{route('paginaprincipal')}}#programas cortos">Programas</a></li>
                <li><a href="{{route('paginaprincipal')}}">Nosotros</a></li>
            </ul>


                        <!-- Botones en la esquina superior derecha -->
                        <div class="auth-buttons">
                            @guest
                                <!-- Botón de Registro ("Solicitar Info") -->
                                <a href="{{ route('register') }}" class="btn btn-primary">Registrate</a>
                
                                <!-- Botón de Inicio de Sesión -->
                                <a href="{{ route('login') }}" class="btn btn-secondary">Iniciar Sesión</a>
                            @endguest

                            @auth
                <!-- Si el usuario está autenticado, mostrar el menú de perfil -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} <!-- Muestra el nombre del usuario autenticado -->
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <!-- Enlace para ver el perfil (ajustes de usuario) -->
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a>

                        <!-- Botón para cerrar sesión -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Cerrar Sesión</button>
                        </form>
                    </div>
                </div>
            @endauth

        <!-- Mobile Menu Icon -->
        <div class="mobile-menu-icon">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        
         
    </nav>
</header>
<script src="/public/js/header.js"></script>
</body>
</html>
