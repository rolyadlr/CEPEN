<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina principal</title>
    <link rel="stylesheet" href="/resources/css/welcomeapp.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<header>
    @include('partials/header')
</header>
<body>
 <!-- Primera Área: carrusel -->
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/public/imgs/imagen1_carrusel.png" class="d-block w-100" alt="Carreras cortas, futuro sólido">
        <div class="carousel-caption d-none d-md-block">
            <h5>Carreras cortas, futuro sólido</h5>
            <p>Comienza tu camino profesional hoy.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/public/imgs/imagen2_carrusel.png" class="d-block w-100" alt="Oportunidades laborales">
        <div class="carousel-caption d-none d-md-block">
            <h5>Oportunidades laborales</h5>
            <p>Estudia lo que las empresas demandan.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/public/imgs/imagen3_carrusel.png" class="d-block w-100" alt="Educación de calidad">
        <div class="carousel-caption d-none d-md-block">
            <h5>Educación de calidad</h5>
            <p>Formación profesional con estándares internacionales.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
</div>

  

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
                <form action="#">
                    <input type="text" placeholder="Nombres" required>
                    <input type="text" placeholder="Apellidos" required>
                    <div class="fila">
                        <input type="email" placeholder="Correo" required>
                        <input type="tel" placeholder="Celular" required>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="datos">
                        <label for="datos" style="margin-top: -38px;margin-left: -80px;">Acepto el uso de mis datos</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="terminos">
                        <label for="terminos" style="margin-top: -38px;margin-left: 32px;">Acepto haber leído las políticas de privacidad y los términos y condiciones</label>
                    </div>
                    <button type="submit" class="boton-enviar">ENVIAR</button>
                </form>
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
