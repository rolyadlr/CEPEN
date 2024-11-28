<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cursos tecnicos</title>
    <link rel="stylesheet" href="/public/css/programas.css">
</head>
<header>
    @include('partials/header')
</header>
<body>
    <section id="area1">
        <h1>CURSOS DE EXEL EMPRESARIAL</h1>
        <p>Dirigido a: Estudiantes, emprendedores, adolecentes y empresarios. <br> Modalidad:PRESENCIAL- SEMIPRESENCIAL <br> DURACION: 2 MESES</p>
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
            <p>Como trabajar con distintos tipos de datos, como numericos, alfanumericos, textos y fechas.</p>
            <p>Como contruir tablas y rangos de datos de manera estructurada.</p>
            <p>Como contruir tablas matriciales de datos para evaluar indicacdores de manera simultanea.</p>
            <p>Como aplicar funciones como creditos, ahorros e inversiones.</p>
        </div>
        <img src="/public/imgs/imagen_8.jpeg" alt="imagen_1">
        <p class="descripcion">La capacidad de Microsoft Excel 365 para manejar datos de manera estructurada y segura, utilizando el nuevo <br>
        concepto de matrices de datos, la ha posicionado como la herramienta más completa actualmente. Es utilizada en <br>
        todos los niveles de una organización, permitiendo gestionar diversos tipos de datos, estructurar tablas y <br>
        automatizar cálculos. Estas herramientas ofrecen nuevas competencias tanto a estudiantes como a profesionales, lo <br>
        que incrementa directamente la productividad de las organizaciones, una habilidad muy valorada por las empresas en sus ejecutivos hoy en día.</p>
    </section>

    <section id="area3">
        <div class="admin-actions">
            <a href="{{ route('cursos.index') }}" class="boton-admin">Administrar Cursos</a>
        </div>
        <div class="cursos-titulo">CURSOS</div>
        <div class="curso" onclick="toggleDetails('detalles1')" onmouseover="highlightDetails('detalles1')" onmouseout="resetHighlight('detalles1')"> FUNDAMENTOS BASICOS </div>
            <div id="detalles1" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 20 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 70%</p>
            <a href="/path/to/horario_fundamentos_autocad.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Próximo examen el 20 de noviembre.</p>
        </div>
        
        <div class="curso" onclick="toggleDetails('detalles2')" onmouseover="highlightDetails('detalles2')" onmouseout="resetHighlight('detalles2')"> FUNCIONES </div>        
            <div id="detalles2" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 25 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 75%</p>
            <a href="/path/to/horario_dibujo_autocad.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Taller práctico el 22 de noviembre.</p>
        </div>
    
        <div class="curso" onclick="toggleDetails('detalles3')" onmouseover="highlightDetails('detalles3')" onmouseout="resetHighlight('detalles3')"> MATRICES DINAMICAS </div>        
            <div id="detalles3" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 30 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 80%</p>
            <a href="/path/to/horario_modificacion_autocad.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Proyecto final el 25 de noviembre.</p>
        </div>
    
        <div class="curso" onclick="toggleDetails('detalles4')" onmouseover="highlightDetails('detalles4')" onmouseout="resetHighlight('detalles4')"> DATOS DE TIEMPO Y FILTRO AVANZADOS </div>        
        <div id="detalles4" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 15 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 70%</p>
            <a href="/path/to/horario_herramientas_especiales.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Entrega de tareas el 27 de noviembre.</p>
        </div>
    </section>
    
    <script src="/public/js/cursoscortos.js"></script>
    <footer>
    @include('partials/footer')
</footer>
<script src="/public/js/cursoscortos.js"></script>
</body>
</html>
