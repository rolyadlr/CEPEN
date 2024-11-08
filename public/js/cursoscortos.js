function toggleDetails(id) {
    var details = document.getElementById(id);
    if (details.style.display === "none" || details.style.display === "") {
        details.style.display = "block";
    } else {
        details.style.display = "none";
    }
}

function highlightDetails(id) {
    var details = document.getElementById(id);
    details.classList.add("highlighted");
}

function resetHighlight(id) {
    var details = document.getElementById(id);
    details.classList.remove("highlighted");
}
