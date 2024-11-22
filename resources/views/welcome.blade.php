<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEPEN</title>
    <link rel="stylesheet" href="/public/css/welcomeapp.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="/public/imgs/CEPEN_logopant.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<header>
    @include('partials/header')
</header>
<body>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/public/imgs/imagen1_carrusel.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/public/imgs/imagen2_carrusel.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/public/imgs/imagen3_carrusel.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    
        <!-- Texto y botón estáticos -->
        <div class="carousel-caption-static">
            <h5>CARRERAS CORTAS,<br> FUTURO SÓLIDO</h5>
            <p>Alcanza el éxito en banca y finanzas en tiempo récord</p>
            <a class="style" href="#area3" class="btn btn-warning">Inscríbete aquí</a>
        </div>
    </div>
    
 
 <!-- Segunda Área: Beneficios -->

 <section class="beneficios">
    <div class="beneficios-item">
        <img src="/public/imgs/certificado.png" alt="certificado" >
        <h3>Certificación</h3>
        <p class="highlight">Rápida</p>
    </div>
    <div class="beneficios-item">
        <img src="/public/imgs/birrete.png" alt="licenciados">
        <h3>Licenciados</h3>
        <p class="highlight">por SUNEDU</p>
    </div>
    <div class="beneficios-item">
        <img src="/public/imgs/salario.png" alt="bolsa" >
        <h3>Accede a nuestra</h3>
        <p class="highlight">bolsa laboral</p>
    </div>
    <div class="beneficios-item">
        <img src="/public/imgs/conferencia.png" alt="docente">
        <h3>Contamos con</h3>
        <p class="highlight">docentes especializados</p>
    </div>
</section>

 <!-- CARRERAS -->

 <section id="area1">
        <h1 id="carreras profesionales" >CARRERAS PROFESIONALES TECNICAS</h1>
        <div id="linea-roja"></div>
        <div class="carreras">
            <div class="tarjeta">
                <img src="/public/imgs/imagen_1.jpeg" alt="Cajero Bancario">
                <div class="contenido-tarjeta">
                    <h2 id="rojo">Cajero Bancario</h2>
                    <p>6 meses</p>
                    <a href="{{ route("CajeroBancario") }}" class="boton" style="background-color: #e74c2c;">Ver carrera</a>
                </div>
            </div>
            <div class="tarjeta">
                <img src="/public/imgs/imagen_2.jpeg" alt="Administración Bancaria">
                <div class="contenido-tarjeta">
                    <h2 id="amarillo">Administración Bancaria</h2>
                    <p>6 meses</p>
                    <a href="{{ route("AdministracionBancaria") }}" class="boton" style="background-color: #e7a03c;">Ver carrera</a>
                </div>
            </div>
            <div class="tarjeta">
                <img src="/public/imgs/imagen_3.jpeg" alt="Gestión de Negocios">
                <div class="contenido-tarjeta">
                    <h2 id="verde">Gestión de Negocios</h2>
                    <p>6 meses</p>
                    <a href="{{ route("GestiondeNegocios") }}" class="boton" style="background-color: #9fce52;">Ver carrera</a>
                </div>
            </div>
        </div>

         <!-- PROGRAMAS -->

        <h1 id="programas cortos" >PROGRAMAS TECNICOS</h1>
        <div id="linea-roja"></div>
        <div class="programas">
            <div class="tarjeta">
                <img src="/public/imgs/imagen_4.jpeg" alt="Autocad">
                <div class="contenido-tarjeta">
                    <h2 id="rojo">Autocad</h2>
                    <p>2 meses</p>
                    <a href="{{ route('AutoCad') }}" class="boton" style="background-color: #e74c2c;">Ver carrera</a>
                </div>
            </div>
            <div class="tarjeta">
                <img src="/public/imgs/imagen_5.jpeg" alt="Excel Empresarial">
                <div class="contenido-tarjeta">
                    <h2 id="amarillo">Excel Empresarial</h2>
                    <p>2 meses</p>
                    <a href="{{ route("ExelEmpresarial") }}" class="boton" style="background-color: #e7a03c;">Ver carrera</a>
                </div>
            </div>
            <div class="tarjeta">
                <img src="/public/imgs/imagen_6.jpeg" alt="Redacción Ejecutiva">
                <div class="contenido-tarjeta">
                    <h2 id="verde">Redacción Ejecutiva</h2>
                    <p>2 meses</p>
                    <a href="{{ route("RedaccionEjecutiva") }}" class="boton" style="background-color: #9fce52;">Ver carrera</a>
                </div>
            </div>
        </div>
    </section>
    
 <!-- Segunda Área: Elige tu Horario Perfecto -->
 <section id="area2">
    <h1>ELIGE TU HORARIO PERFECTO</h1>
    <div id="linea-roja"></div>
    <div class="horarios-imagen">
        <div class="horarios">
            <div class="horario" id="amarillo">
                <h2>Mañanas</h2>
                <p>Lunes a Miércoles</p>
                <span id="amarillo">11:00 AM - 1:30 PM ☀️</span>
            </div>
            <div class="horario" id="celeste">
                <h2>Noches</h2>
                <p>Lunes a Miércoles</p>
                <span id="celeste">7:00 PM - 9:00 PM 🌙</span>
            </div>
            <div class="horario" id="verde">
                <h2>Domingos</h2>
                <span id="verde">11:30 AM - 3:00 PM 📅</span>
            </div>
        </div>
        <div class="imagen-horario">
            <img src="/public/imgs/imagen_7.jpeg" alt="Estudiante">
        </div>
    </div>
</section>

    

    <!-- Tercera Área: Solicita Información -->
    <section id="area3">
        <div class="formulario-contenedor">
            <div class="formulario">
                <h2>SOLICITA INFORMACIÓN</h2>
                <form action="{{ route('solicitud.informacion') }}" method="POST">
                    @csrf
                    <input type="text" name="nombres" placeholder="Nombres" required>
                    <input type="text" name="apellidos" placeholder="Apellidos" required>
                    <div class="fila">
                        <input type="email" name="correo" placeholder="Correo" required>
                        <input type="tel" name="celular" placeholder="Celular" required>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="datos" name="acepto_datos" required>
                        <label for="datos" style="margin-top: -38px;margin-left: -80px;">Acepto el uso de mis datos</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="terminos" name="acepto_terminos" required>
                        <label for="terminos" style="margin-top: -38px;margin-left: 32px;">Acepto haber leído las políticas de privacidad y los términos y condiciones</label>
                    </div>
                    <button type="submit" class="boton-enviar">ENVIAR</button>
                </form>
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

            </div>
            <div class="texto">
                <h1>Es momento de dar un paso para <span class="futuro">tu futuro.</span></h1>
                <h1>Domina el <span class="mercado">mercado laboral.</span></h1>
            </div>
        </div>
    </section>
<footer>
    @include('partials/footer')
</footer>
</body>
</html>
