// confirm.js

// Vérifier si le paramètre success est présent dans l'URL  
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.has('success')) {
    const codePersonnel = "<?php echo $codePersonnel; ?>"; // Récupérer le code depuis PHP

    Swal.fire({
        title: 'Merci !',
        text: `Votre message a bien été envoyé ! Voici votre code secret : ${codePersonnel}`,
        icon: 'success',
        confirmButtonText: 'OK'
    });
}