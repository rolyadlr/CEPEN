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
        <h1>CURSOS DE EXEL EMPRESARIAL</h1>
        <p>Dirigido a: Estudiantes, emprendedores, adolecentes y empresarios. <br> Modalidad:PRESENCIAL- SEMIPRESENCIAL <br> {{ $programa->duracion ?? 'No hay duracion disponible para esta carrera.' }} MESES</p>
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
        <p class="descripcion">
            {{ $programa->descripcion ?? 'No hay descripción disponible para esta carrera.' }}
        </p>
    </section>

    <section id="area3">
        <div class="admin-actions">
            @auth
                @if(auth()->user()->tieneRol(['admin', 'docente']))
                    <a href="{{ route('cursos.index') }}" class="boton-admin">Administrar Cursos</a>
                @endif
            @endauth
        </div>
        <div class="cursos-titulo">Cursos Relacionados con Redaccion Ejecutiva</div>
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
<script src="/resources/js/cursoscortos.js"></script>
</body>
</html>
