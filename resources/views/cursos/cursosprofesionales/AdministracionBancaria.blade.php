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
        <h1>ADMINISTRACION BANCARIA</h1>
        <p>Dirigido a: Estudiantes, emprendedores, adolecentes y empresarios. <br> Modalidad:PRESENCIAL- SEMIPRESENCIAL <br> DURACION: 6 MESES</p>
        <button type="inscripcion" class="boton-inscribirse">INSCRIBIRSE</button>
    </section>

    <section id="area2">
        <h1>¿QUE APRENDERAS?</h1>
        <div class="grid-container">
            <p>Desarrolla habilidades técnicas y persoanles como comunicación, lidereazgo y creatividad.</p>
            <p>Realizar Operaciones administrativas y comerciales en banca y finanzas.</p>
            <p>Participa en la transformación digital financiera.</p>
            <p>Analizar los resultados de la intermediación financiera.</p>
        </div>
        <img src="/public/imgs/imagen_8.jpeg" alt="imagen_1">
        <p class="descripcion">Como técnico en Administración de Negocios Bancarios y Financieros, estarás preparado para gestionar y <br>
        administrar instituciones financieras y bancarias. Durante la carrera, adquirirás las habilidades y conocimientos <br>
        necesarios para desempeñarte eficazmente en el sector financiero. Aprenderás a gestionar diversas operaciones y <br>
        procesos financieros, además de cumplir con las normativas y regulaciones del sector.</p>
    </section>

    <section id="area3">
        <div class="cursos-titulo">CURSOS</div>
        <div class="curso">FUNDAMENTOS DE GESTIÓN EMPRESARIAL</div>
        <div class="curso">NEGOCIOS INTERNACIONALES</div>
        <div class="curso">MATEMATICAS APLICADAS A LOS NEGOCIOS</div>
        <div class="curso">SOFTWARE PARA LOS NEGOCIOS</div>
        <div class="curso">DESARROLLO DE HABILIDADES</div>
    </section>
    <footer>
    @include('partials/footer')
</footer>
</body>
</html>
