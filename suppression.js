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

        document.getElementById('deleteMessage').addEventListener