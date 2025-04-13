
function updateClock() {
    const now = new Date();
    const options = { hour: '2-digit', minute: '2-digit', second: '2-digit' };
    document.getElementById('clock').innerHTML = now.toLocaleTimeString([], options);
}

function updateCalendar() {
    const now = new Date();
    const options = { weekday: 'short', year: 'numeric', month: 'numeric', day: 'numeric' };
    document.getElementById('calendar').innerHTML = now.toLocaleDateString([], options);
}

// Met à jour l'horloge et le calendrier toutes les secondes  
setInterval(updateClock, 1000);
updateCalendar();