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
        <h1>CAJERO BANCARIO Y COMERCIAL</h1>
        <p>Dirigido a: Estudiantes, emprendedores, adolecentes y empresarios. <br> Modalidad:PRESENCIAL- SEMIPRESENCIAL <br> DURACION: 6 MESES</p>
        <button type="inscripcion" class="boton-inscribirse">INSCRIBIRSE</button>
    </section>

    <section id="area2">
        <h1>¿QUE APRENDERAS?</h1>
        <div class="grid-container">
            <p>Aplicar métodos de identificación de billetes y monedas falsas nacionales y extranjeras según sus características de seguridad.</p>
            <p>Identificar y diferenciar los tipos de mercados financieros y los productos que la banca ofrece.</p>
            <p>Clasificar los diferentes Títulos Valores y comprobantes de pago.</p>
            <p>Analizar los resultados del proceso de la intermediación financiera.</p>
        </div>
        <img src="/public/imgs/imagen_8.jpeg" alt="imagen_1">
        <p class="descripcion">En este curso, adquirimos los conocimientos esenciales sobre el Sistema Financiero Peruano, incluyendo los <br> organismos reguladores, las entidades de protección al cliente, los productos financieros y la gestión de una caja <br> comercial, todo ello fundamentado en un enfoque teórico-práctico.</p>
    </section>

    <section id="area3">
        <div class="cursos-titulo">CURSOS</div>
        <div class="curso" onclick="toggleDetails('detalles1')" onmouseover="highlightDetails('detalles1')" onmouseout="resetHighlight('detalles1')"> INTRODUCCION AL SISTEMA FINANCIERO </div>
            <div id="detalles1" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 20 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 70%</p>
            <a href="/path/to/horario_fundamentos_autocad.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Próximo examen el 20 de noviembre.</p>
        </div>
        
        <div class="curso" onclick="toggleDetails('detalles2')" onmouseover="highlightDetails('detalles2')" onmouseout="resetHighlight('detalles2')"> ATENCION AL CLIENTE TECNICAS DE VENTA </div>        
            <div id="detalles2" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 25 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 75%</p>
            <a href="/path/to/horario_dibujo_autocad.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Taller práctico el 22 de noviembre.</p>
        </div>
    
        <div class="curso" onclick="toggleDetails('detalles3')" onmouseover="highlightDetails('detalles3')" onmouseout="resetHighlight('detalles3')"> PRODUCTOS Y SERVICIOS FINANCIEROS </div>        
            <div id="detalles3" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 30 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 80%</p>
            <a href="/path/to/horario_modificacion_autocad.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Proyecto final el 25 de noviembre.</p>
        </div>
    
        <div class="curso" onclick="toggleDetails('detalles4')" onmouseover="highlightDetails('detalles4')" onmouseout="resetHighlight('detalles4')"> CONSTITUCION DE EMPRESAS Y OPERATIVIDAD DE PRODUCTOS FINANCIEROS </div>        
        <div id="detalles4" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 15 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 70%</p>
            <a href="/path/to/horario_herramientas_especiales.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Entrega de tareas el 27 de noviembre.</p>
        </div>
    
        <div class="curso" onclick="toggleDetails('detalles5')" onmouseover="highlightDetails('detalles5')" onmouseout="resetHighlight('detalles5')"> MATEMATICA FINANCIERA CON APLICACIONES EN EXCEL </div>        
        <div id="detalles5" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 18 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 75%</p>
            <a href="/path/to/horario_capas_relevancia.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Evaluación final el 30 de noviembre.</p>
        </div>

        <div class="curso" onclick="toggleDetails('detalles6')" onmouseover="highlightDetails('detalles6')" onmouseout="resetHighlight('detalles6')"> CONTEO DE DINERO </div>        
        <div id="detalles6" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 18 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 75%</p>
            <a href="/path/to/horario_capas_relevancia.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Evaluación final el 30 de noviembre.</p>
        </div>

        <div class="curso" onclick="toggleDetails('detalles7')" onmouseover="highlightDetails('detalles7')" onmouseout="resetHighlight('detalles7')"> DETECCION DE BILLETES FALSOS </div>        
        <div id="detalles7" class="detalles-curso">
            <p><strong>Horas del Curso:</strong> 18 horas</p>
            <p><strong>Promedio Necesario para Aprobar:</strong> 75%</p>
            <a href="/path/to/horario_capas_relevancia.pdf" target="_blank">Ver Horario</a>
            <p><strong>Anuncios:</strong> Evaluación final el 30 de noviembre.</p>
        </div>
        
        <div class="curso" onclick="toggleDetails('detalles8')" onmouseover="highlightDetails('detalles8')" onmouseout="resetHighlight('detalles8')"> SIMULADOR DE OPERACIONES BANCARIAS </div>        
        <div id="detalles8" class="detalles-curso">
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
