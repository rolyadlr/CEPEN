// /public/js/cursosprofesionales.js
console.log("Script loaded");

function toggleDetails(id) {
    const detalles = document.getElementById(id);
    if (detalles.style.display === "none" || !detalles.style.display) {
        detalles.style.display = "block";
    } else {
        detalles.style.display = "none";
    }
}

function highlightDetails(id) {
    const detalles = document.getElementById(id);
    detalles.style.backgroundColor = "#f0f8ff";
}

function resetHighlight(id) {
    const detalles = document.getElementById(id);
    detalles.style.backgroundColor = "";
}

// Función para mostrar el formulario emergente
function mostrarFormulario() {
    document.getElementById("formularioInscripcion").style.display = "flex";
}

// Función para cerrar el formulario emergente
function cerrarFormulario() {
    document.getElementById("formularioInscripcion").style.display = "none";
}
