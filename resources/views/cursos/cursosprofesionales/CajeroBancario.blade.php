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
        <div class="curso">INTRODUCCION AL SISTEMA FINANCIERO</div>
        <div class="curso">ATENCION AL CLIENTE TECNICAS DE VENTA</div>
        <div class="curso">PRODUCTOS Y SERVICIOS FINANCIEROS</div>
        <div class="curso">CONSTITUCION DE EMPRESAS Y OPERATIVIDAD DE PRODUCTOS FINANCIEROS</div>
        <div class="curso">MATEMATICA FINANCIERA CON APLICACIONES EN EXCEL</div>
        <div class="curso">CONTEO DE DINERO</div>
        <div class="curso">DETECCION DE BILLETES FALSOS</div>
        <div class="curso">SIMULADOR DE OPERACIONES BANCARIAS</div>
    </section>
    <footer>
    @include('partials/footer')
</footer>
</body>
</html>
