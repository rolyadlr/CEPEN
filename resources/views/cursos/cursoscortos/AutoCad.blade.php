<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cursos tecnicos</title>
    <link rel="stylesheet" href="/public/css/cursoscortos.css">
</head>
<header>
    @include('partials/header')
</header>
<body>
    <section id="area1">
        <h1>CURSO DE AUTOCAD</h1>
        <p>Dirigido a: Estudiantes, emprendedores, adolecentes y empresarios. <br> Modalidad:PRESENCIAL- SEMIPRESENCIAL <br> DURACION: 2 MESES</p>
        <button type="inscripcion" class="boton-inscribirse">INSCRIBIRSE</button>
    </section>

    <section id="area2">
        <h1>¿QUE APRENDERAS?</h1>
        <div class="grid-container">
            <p>Conocer las herramientas de manejo del software.</p>
            <p>Mejorar la representación grafica de proyectos arquitectonicos, de ingenieria y/o diseño industrial.</p>
            <p>Mejorar la precision en el dominio de dibujo y planos a escala en 2D.</p>
            <p>Dominar las herramientas y comandos que ofrece el programa, tales como herramientas de dibujo y herramientas en modificacion.</p>
        </div>
        <img src="/public/imgs/imagen_8.jpeg" alt="imagen_1">
        <p class="descripcion">En este curso de AutoCAD, desarrollarás un proyecto práctico que te permitirá diseñar tus propios planos <br>
        profesionales mientras aprendes a dominar las principales herramientas del software. Para ello, hemos definido <br>
        una pieza específica con la cual trabajarás en cada unidad, brindándote un acercamiento real al diseño mecánico en 2D.</p>
    </section>

    <section id="area3">
        <div class="cursos-titulo">CURSOS</div>
        <div class="curso">FUNDAMENTOS DE AUTOCAD</div>
        <div class="curso">HERRAMIENTAS DE DIBUJO AUTOCAD</div>
        <div class="curso">HERRAMIENTAS DE MODIFICACION AUTOCAD</div>
        <div class="curso">HERRAMIENTAS ESPECIALES</div>
        <div class="curso">CAPAS DE TIPO DE RELEVANCIA Y DISTANCIAMIENTO EN EL DIBUJO</div>
    </section>
    <footer>
    @include('partials/footer')
</footer>
</body>
</html>
