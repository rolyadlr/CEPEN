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
        <h1>CURSOS DE EXEL EMPRESARIAL</h1>
        <p>Dirigido a: Estudiantes, emprendedores, adolecentes y empresarios. <br> Modalidad:PRESENCIAL- SEMIPRESENCIAL <br> DURACION: 2 MESES</p>
        <button type="inscripcion" class="boton-inscribirse">INSCRIBIRSE</button>
    </section>

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
        <div class="cursos-titulo">CURSOS</div>
        <div class="curso">FUNDAMENTOS BASICOS</div>
        <div class="curso">FUNCIONES</div>
        <div class="curso">MATRICES DINAMICAS</div>
        <div class="curso">GESTIONAR ORDENAMIENTO DE DATOS</div>
        <div class="curso">DATOS DE TIEMPO Y FILTRO AVANZADOS</div>
    </section>
    <footer>
    @include('partials/footer')
</footer>
</body>
</html>
