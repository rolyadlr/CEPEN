<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cursos tecnicos</title>
    <link rel="stylesheet" href="/public/css/cursosprofesionales.css">
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
<!-- Formulario emergente -->
<div class="formulario-contenedor" id="formularioInscripcion">
    <div class="formulario">
        <h2>Formulario de Inscripción</h2>
        <input type="text" placeholder="Nombre">
        <input type="email" placeholder="Correo electrónico">
        <div class="fila">
            <input type="text" placeholder="Edad">
            <input type="text" placeholder="Teléfono">
        </div>
        <div class="checkbox">
            <input type="checkbox" id="acepto">
            <label for="acepto">Acepto los términos y condiciones</label>
        </div>
        <button class="boton-enviar" onclick="cerrarFormulario()">Enviar</button>
    </div>
</div>
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
        <div class="admin-actions">
            <a href="{{ route('cursos.index') }}" class="boton-admin">Administrar Cursos</a>
        </div>
        <div class="cursos-titulo">CURSOS</div>
        <div class="curso" onclick="toggleDetails('detalles1')" onmouseover="highlightDetails('detalles1')" onmouseout="resetHighlight('detalles1')"> FUNDAMENTOS DE GESTIÓN EMPRESARIAL </div>
            <div id="detalles1" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 20 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 70%</p>
            <a href="/path/to/horario_fundamentos_autocad.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Próximo examen el 20 de noviembre.</p>
        </div>
        
        <div class="curso" onclick="toggleDetails('detalles2')" onmouseover="highlightDetails('detalles2')" onmouseout="resetHighlight('detalles2')"> NEGOCIOS INTERNACIONALES </div>        
            <div id="detalles2" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 25 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 75%</p>
            <a href="/path/to/horario_dibujo_autocad.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Taller práctico el 22 de noviembre.</p>
        </div>
    
        <div class="curso" onclick="toggleDetails('detalles3')" onmouseover="highlightDetails('detalles3')" onmouseout="resetHighlight('detalles3')"> MATEMATICAS APLICADAS A LOS NEGOCIOS </div>        
            <div id="detalles3" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 30 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 80%</p>
            <a href="/path/to/horario_modificacion_autocad.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Proyecto final el 25 de noviembre.</p>
        </div>
    
        <div class="curso" onclick="toggleDetails('detalles4')" onmouseover="highlightDetails('detalles4')" onmouseout="resetHighlight('detalles4')"> SOFTWARE PARA LOS NEGOCIOS </div>        
        <div id="detalles4" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 15 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 70%</p>
            <a href="/path/to/horario_herramientas_especiales.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Entrega de tareas el 27 de noviembre.</p>
        </div>
    
        <div class="curso" onclick="toggleDetails('detalles5')" onmouseover="highlightDetails('detalles5')" onmouseout="resetHighlight('detalles5')"> DESARROLLO DE HABILIDADES </div>        
        <div id="detalles5" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 18 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 75%</p>
            <a href="/path/to/horario_capas_relevancia.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Evaluación final el 30 de noviembre.</p>
        </div>
    </section>
    

    <footer>
    @include('partials/footer')
</footer>
<script src="/public/js/cursosprofesionales.js"></script>

</body>
</html>
