<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEPEN</title>
    <link rel="stylesheet" href="/resources/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<header>
    <nav class="navbar">
        <div class="logo">
            <a href="{{ route('paginaprincipal') }}"><img src="{{ asset('/imgs/CEPEN_logo.png') }}" alt="CEPEN Logo"></a>
        </div>

        <ul class="nav-menu">
            <li><a href="{{route('paginaprincipal')}}#carreras profesionales">Carreras</a></li>
            <li><a href="{{route('paginaprincipal')}}#programas cortos">Programas</a></li>
            <li><a href="{{route('paginaprincipal')}}">Nosotros</a></li>
            @if (Auth::check() && in_array(Auth::user()->rol_id, [1, 2]))
                <li><a href="{{ route('dashboard') }}">Administración</a></li>
            @endif
        </ul>

        <div class="nav-right">
            <div class="menu-icon" onclick="toggleMenu()">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <div class="auth-buttons">
                @guest
                    <a href="{{ route('register') }}" class="btn btn-primary">Registrate</a>
                    <a href="{{ route('login') }}" class="btn btn-secondary">Iniciar Sesión</a>
                @endguest

                @auth
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i> {{ Auth::user()->name }}
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
</header>
<script src="/public/js/header.js"></script>
<script>
    function toggleMenu() {
        const menu = document.querySelector('.nav-menu');
        menu.classList.toggle('show');
    }
</script>
</body>
</html>
