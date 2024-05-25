document.addEventListener('DOMContentLoaded', function () {
    getAccountImage();
});

function getAccountImage() {
    // Effettua una richiesta al server per ottenere l'immagine dell'account
    fetch('get_account_image.php')
    .then(response => response.json())
    .then(data => {
        // Verifica se l'immagine dell'account è stata ottenuta con successo
        if (data.path) {
            // Seleziona tutte le immagini con alt "Account Icon"
            const accountIconImages = document.querySelectorAll('img[alt="Account Icon"]');

            // Itera su tutte le immagini con alt "Account Icon"
            accountIconImages.forEach(function(image) {
                // Sostituisci l'immagine con alt "Account Icon" con l'immagine dell'account
                image.src = data.path;
            });
        }
    })
    .catch(error => {
        console.error('Errore durante il recupero dell\'immagine dell\'account:', error);
    });
}
