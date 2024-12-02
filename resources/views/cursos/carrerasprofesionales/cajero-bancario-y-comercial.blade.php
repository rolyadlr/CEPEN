<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Técnicos</title>
    <link rel="stylesheet" href="/resources/css/cursosprofesionales.css">
    <link rel="stylesheet" href="/resources/css/header.css">
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
    <section id="area1">
        <h1>CAJERO BANCARIO Y COMERCIAL</h1>
        <p>Dirigido a: Estudiantes, emprendedores, adolecentes y empresarios. <br> Modalidad:PRESENCIAL- SEMIPRESENCIAL <br> {{ $carrera->duracion ?? 'No hay duracion disponible para esta carrera.' }} MESES</p>
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
            <p>Aplicar métodos de identificación de billetes y monedas falsas nacionales y extranjeras según sus características de seguridad.</p>
            <p>Identificar y diferenciar los tipos de mercados financieros y los productos que la banca ofrece.</p>
            <p>Clasificar los diferentes Títulos Valores y comprobantes de pago.</p>
            <p>Analizar los resultados del proceso de la intermediación financiera.</p>
        </div>
        <img src="/public/imgs/imagen_8.jpeg" alt="imagen_1">
        <p class="descripcion">
            {{ $carrera->descripcion ?? 'No hay descripción disponible para esta carrera.' }}
        </p>
    </section>

    <section id="area3">
        <div class="admin-actions">
            <a href="{{ route('cursos.index') }}" class="boton-admin">Administrar Cursos</a>
        </div>
        <div class="cursos-titulo">Cursos Relacionados con Administración Bancaria</div>
@foreach ($cursos as $curso)
    <div class="curso" onclick="toggleDetails('detalles{{ $curso->id }}')" 
         onmouseover="highlightDetails('detalles{{ $curso->id }}')" 
         onmouseout="resetHighlight('detalles{{ $curso->id }}')">
        {{ strtoupper($curso->nombre) }}
    </div>
    <div id="detalles{{ $curso->id }}" class="detalles-curso">
        <p><strong>Descripción:</strong> {{ $curso->descripcion ?? 'No disponible' }}</p>
        <p><strong>Duración:</strong> {{ $curso->duracion }} horas</p>
        <p><strong>Promedio para Aprobar:</strong> {{ $curso->promedio_aprobacion }}%</p>
        @if($curso->documento)
            <a href="{{ asset('storage/' . $curso->documento) }}" target="_blank">Ver Horario</a>
        @endif
        <p><strong>Anuncios:</strong> {{ $curso->anuncios ?? 'Sin anuncios por ahora.' }}</p>
        <p><strong>Programa:</strong> {{ $curso->programa->nombre ?? 'Sin programa asociado' }}</p>
    </div>
@endforeach
</section>
        
    
    <script src="/public/js/cursoscortos.js"></script>

    <footer>
    @include('partials/footer')
</footer>
<script src="/resources/js/cursosprofesionales.js"></script>

</body>
</html>
