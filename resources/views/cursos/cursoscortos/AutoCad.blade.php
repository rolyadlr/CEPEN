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
        
        <div class="curso" onclick="toggleDetails('detalles1')" onmouseover="highlightDetails('detalles1')" onmouseout="resetHighlight('detalles1')"> FUNDAMENTOS DE AUTOCAD </div>
            <div id="detalles1" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 20 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 70%</p>
            <a href="/path/to/horario_fundamentos_autocad.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Próximo examen el 20 de noviembre.</p>
        </div>
        
        <div class="curso" onclick="toggleDetails('detalles2')" onmouseover="highlightDetails('detalles2')" onmouseout="resetHighlight('detalles2')"> HERRAMIENTAS DE DIBUJO AUTOCAD </div>        
            <div id="detalles2" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 25 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 75%</p>
            <a href="/path/to/horario_dibujo_autocad.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Taller práctico el 22 de noviembre.</p>
        </div>
    
        <div class="curso" onclick="toggleDetails('detalles3')" onmouseover="highlightDetails('detalles3')" onmouseout="resetHighlight('detalles3')"> HERRAMIENTAS DE MODIFICACION AUTOCAD </div>        
            <div id="detalles3" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 30 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 80%</p>
            <a href="/path/to/horario_modificacion_autocad.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Proyecto final el 25 de noviembre.</p>
        </div>
    
        <div class="curso" onclick="toggleDetails('detalles4')" onmouseover="highlightDetails('detalles4')" onmouseout="resetHighlight('detalles4')"> CAPAS DE TIPO DE RELEVANCIA Y DISTANCIAMIENTO EN EL </div>        
        <div id="detalles4" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 15 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 70%</p>
            <a href="/path/to/horario_herramientas_especiales.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Entrega de tareas el 27 de noviembre.</p>
        </div>
    
        <div class="curso" onclick="toggleDetails('detalles5')" onmouseover="highlightDetails('detalles5')" onmouseout="resetHighlight('detalles5')"> FUNDAMENTOS DE AUTOCAD </div>        
        <div id="detalles5" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 18 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 75%</p>
            <a href="/path/to/horario_capas_relevancia.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Evaluación final el 30 de noviembre.</p>
        </div>
    </section>
    
    <script src="/public/js/cursoscortos.js"></script>
    <footer>
    @include('partials/footer')
</footer>
</body>
</html>
