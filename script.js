function showImage(src, title) {
    const largeImage = document.getElementById('largeImage');
    const imageTitle = document.getElementById('imageTitle');
    const imageDisplay = document.getElementById('imageDisplay');

    largeImage.src = src; // Met à jour l'image agrandie  
    imageTitle.textContent = title; // Met à jour le titre  
    imageDisplay.style.display = 'block'; // Affiche la section d'image agrandie  
    
    // Fait défiler la page jusqu'à la section d'image agrandie  
     imageDisplay.scrollIntoView({ behavior: 'smooth' });
    }
    // Vérifier si le paramètre success ou deleted est présent dans l'URL  
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.has('success')) {
    Swal.fire({
        title: 'Merci !',
        text: 'Votre message a bien été envoyé.',
        icon: 'success',
        confirmButtonText: 'OK'
    });
}

if (urlParams.has('deleted')) {
    Swal.fire({
        title: 'Supprimé !',
        text: 'Votre dernier message a bien été supprimé.',
        icon: 'success',
        confirmButtonText: 'OK'
    });
}

// Écouteur d'événement pour le bouton de suppression  
document.addEventListener('DOMContentLoaded', function() {
    const deleteButton = document.getElementById('deleteMessage');
    if (deleteButton) {
        deleteButton.addEventListener('click', function() {
            Swal.fire({
                title: 'Êtes-vous sûr ?',
                text: "Cette action supprimera votre dernier message !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Oui, supprimer',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirige vers le script de suppression  
                    window.location.href = 'process_contact.php?action=delete';
                }
            });
        });
    }
});
