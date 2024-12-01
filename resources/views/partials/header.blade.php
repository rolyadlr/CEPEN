<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEPEN</title>
    <link rel="stylesheet" href="/resources/css/header.css">
</head>
<body>
<header>
    <nav class="navbar">
        <div class="logo">
            <a href="{{ route('paginaprincipal')}}"><img src="{{ asset('/imgs/CEPEN_logo.png') }}" alt="CEPEN Logo"></a>
        </div>

        <div class="nav-right">
            <div class="menu-icon" onclick="toggleMenu()">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <ul class="nav-menu">
                <li><a href="{{route('paginaprincipal')}}#carreras profesionales">Carreras</a></li>
                <li><a href="{{route('paginaprincipal')}}#programas cortos">Programas</a></li>
                <li><a href="{{route('paginaprincipal')}}">Nosotros</a></li>
            </ul>

            <div class="auth-buttons">
                @guest
                    <a href="{{ route('register') }}" class="btn btn-primary">Registrate</a>
                    <a href="{{ route('login') }}" class="btn btn-secondary">Iniciar Sesión</a>
                @endguest

                @auth
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Cerrar Sesión</button>
                            </form>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Menú móvil -->
    <ul class="nav-menu mobile">
        <li><a href="{{route('paginaprincipal')}}#carreras profesionales">Carreras</a></li>
        <li><a href="{{route('paginaprincipal')}}#programas cortos">Programas</a></li>
        <li><a href="{{route('paginaprincipal')}}">Nosotros</a></li>
    </ul>
</header>
<script src="/public/js/header.js"></script>
<script>
    function toggleMenu() {
        const menu = document.querySelector('.nav-menu');
        const mobileMenu = document.querySelector('.nav-menu.mobile');
        menu.classList.toggle('show');
        mobileMenu.classList.toggle('show');
    }
</script>
</body>
</html>
