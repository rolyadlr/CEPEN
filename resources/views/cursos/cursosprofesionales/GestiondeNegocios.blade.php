<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cursos tecnicos</title>
    <link rel="stylesheet" href="/resources/css/cursosprofesionales.css">
</head>
<header>
    @include('partials/header')
</header>
<body>
    <section id="area1">
        <h1>GESTION DE NEGOCIO</h1>
        <p>Dirigido a: Estudiantes, emprendedores, adolecentes y empresarios. <br> Modalidad:PRESENCIAL- SEMIPRESENCIAL <br> DURACION: 6 MESES</p>
        <button type="inscripcion" class="boton-inscribirse">INSCRIBIRSE</button>
    </section>

    <section id="area2">
        <h1>¿QUE APRENDERAS?</h1>
        <div class="grid-container">
            <p>Conocer las funciones generales de una empresa, como la administracion comercial, finanzas contabilidad, logistica.</p>
            <p>Desarrollo habilidades para liderar areas empresariales como mercadotecnia, finanzas, logistica y ventas.</p>
            <p>Desarrollo habilidades de solucion de problemas complejos y de toma de decisiones.</p>
            <p>Desarrollo competencias laborales especificas para dirigir los recursos humanos o habilidades de comunicacion y de trabajo en equipo.</p>
        </div>
        <img src="/public/imgs/imagen_8.jpeg" alt="imagen_1">
        <p class="descripcion">Estarás preparado para gestionar organizaciones con una visión global, utilizando la tecnología para una gestión <br>
        óptima. Dominarás la planificación estratégica, la organización y la operatividad de negocios de manera eficiente.</p>
    </section>

    <section id="area3">
        <div class="cursos-titulo">CURSOS</div>
        <div class="curso">INTRODUCCION AL ADMINISTRACION</div>
        <div class="curso">EVOLUCION DE LA ADMINISTRACION</div>
        <div class="curso">GESTION COMERCIAL</div>
        <div class="curso">DECISIONES DE FINANCIAMIENTO E INVERSION</div>
        <div class="curso">GESTION DEL CLIMA Y EXPERIENCIA DEL COLABORADOR</div>
        <div class="curso">GESTION LOGISTICO</div>
        <div class="curso">INNOVACION Y METODOLOGIAS AGILES</div>
    </section>
    <footer>
    @include('partials/footer')
</footer>
</body>
</html>
