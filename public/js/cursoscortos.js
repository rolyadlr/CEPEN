function showDetails(id) {
    document.getElementById(id).style.display = 'block';
}

function hideDetails(id) {
    document.getElementById(id).style.display = 'none';
}

function toggleDetails(id) {
    var element = document.getElementById(id);
    if (element.style.display === 'block') {
        element.style.display = 'none';
    } else {
        element.style.display = 'block';
    }
}

function highlightDetails(id) {
    document.getElementById(id).classList.add('highlighted');
}

function resetHighlight(id) {
    document.getElementById(id).classList.remove('highlighted');
}
