document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('creaPost').onclick=function() {
        document.getElementById('salvaPost').style.display = 'block'; 
        document.getElementById('creaPost').style.display = 'none';  
        document.getElementById('visualizzaCreaPost').style.display = 'block'; 
        document.getElementById('visualizzaPost').style.display = 'none'; 
    }
    document.getElementById('salvaPost').onclick=function(){
        document.getElementById('creaPost').style.display = 'block'; 
        document.getElementById('salvaPost').style.display = 'none'; 
        document.getElementById('visualizzaCreaPost').style.display = 'none'; 
        document.getElementById('visualizzaPost').style.display = 'block';
        salvaPost();
    }
});

function salvaPost() {
    let titlePost = document.getElementById('tPost').innerText;
    titlePost=titlePost.trim();
    let descrizione = document.getElementById('descrizionePost').innerText;
    descrizione=descrizione.trim();
    const imgPost= document.getElementById('imgPost')
    let img =imgPost.querySelector('img').src;
    const startIndex = img.indexOf("/uploaded_images/"); // Trova l'indice della sottostringa "uploaded_images/"
    img = "." + img.substring(startIndex); // Ottieni la sottostringa a partire dall'indice trovato
    console.log(img);

    const formData = new FormData();
    formData.append('titolo', titlePost);
    formData.append('descrizione', descrizione);
    formData.append('immagine', img);

    fetch('fandomManager.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        console.log('Success:', result);
        // Gestisci il successo, ad esempio mostra un messaggio all'utente
    })
    .catch(error => {
        console.error('Error:', error);
        // Gestisci l'errore, ad esempio mostra un messaggio di errore all'utente
    });
}