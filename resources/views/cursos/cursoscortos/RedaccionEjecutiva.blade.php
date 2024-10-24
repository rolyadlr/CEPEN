<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cursos tecnicos</title>
    <link rel="stylesheet" href="/resources/css/cursoscortos.css">
</head>
<header>
    @include('partials/header')
</header>
<body>
    <section id="area1">
        <h1>CURSOS DE REDACCION EJECUTIVA</h1>
        <p>Dirigido a: Estudiantes, emprendedores, adolecentes y empresarios. <br> Modalidad:PRESENCIAL- SEMIPRESENCIAL <br> DURACION: 2 MESES</p>
        <button type="inscripcion" class="boton-inscribirse">INSCRIBIRSE</button>
    </section>

    <section id="area2">
        <h1>¿QUE APRENDERAS?</h1>
        <div class="grid-container">
            <p>Como redactar informes, correos elctronicos, propuestas y presentaciones.</p>
            <p>Como aplicar las normas ortograficas y de redaccion.</p>
            <p>Como dominar las tecnicas de redaccion profesional.</p>
            <p>Como utilizar herramientas tecnologias para optimizar la productividad.</p>
        </div>
        <img src="/public/imgs/imagen_8.jpeg" alt="imagen_1">
        <p class="descripcion">Este curso enseña habilidades avanzadas para redactar documentos ejecutivos, esenciales para una comunicación <br>
        empresarial efectiva. Los participantes aprenderán a crear informes, correos electrónicos, propuestas y <br>
        presentaciones con claridad y profesionalismo, utilizando técnicas para estructurar ideas lógicamente y adaptar el <br>
        tono al público objetivo. Es ideal para profesionales que buscan mejorar su comunicación escrita.</p>
    </section>

    <section id="area3">
        <div class="cursos-titulo">CURSOS</div>
        <div class="curso">FUNFAMENTOS Y ESTILO DE LA REDACCION EJECUTIVA</div>
        <div class="curso">ESTRUCTURA Y ORGANIZACION DE DOCUMENTOS EJECUTIVOS</div>
        <div class="curso">PRODUCCION Y REVISION DE DOCUMENTOS EJECUTIVOS</div>
    </section>
    <footer>
    @include('partials/footer')
</footer>
</body>
</html>
