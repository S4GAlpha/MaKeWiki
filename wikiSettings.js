// Ottieni la finestra modale di conferma cancellazione
var newCommentModal = document.getElementById("newCommentModal");
// Ottieni l'elemento <span> che chiude la finestra modale di conferma cancellazione
var newCommentModalClose = document.querySelector("#newCommentModal .close");

let isFavorite=false;

document.addEventListener('DOMContentLoaded', function () {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'getFavorite.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = JSON.parse(xhr.responseText);
            console.log(data); // Controlla la struttura dei dati
            for (var i = 0; i < data.length; i++) {
                var titolo = data[i].Titolo;
                console.log(titolo);
                if (titolo == document.title) {
                    isFavorite=true;
                    var favoriteButton = document.getElementById('favoriteButton');
                    var svgPath = favoriteButton.querySelector('path'); // Seleziona il path dell'SVG
                    svgPath.setAttribute('fill', 'red'); // Imposta il colore del path
                    break; // Esci dal ciclo se il titolo è stato trovato
                }
            }
        } else {
            // Gestione degli errori
            console.error(xhr.statusText);
        }
    }
    xhr.send();

    loadMessages();
    
    document.getElementById("new-comment").onclick = function() {
        // Apri la finestra modale
        newCommentModal.style.display = "block";
    };

    // Quando l'utente clicca sullo <span> (x) della finestra modale di conferma cancellazione, chiudila
    newCommentModalClose.onclick = function() {
        newCommentModal.style.display = "none";
    };

    // Quando l'utente clicca su "Annulla" nella finestra modale di conferma cancellazione, chiudila
    document.getElementById("cancel-commit").onclick = function() {
        newCommentModal.style.display = "none";
    };

    document.getElementById("favoriteButton").onclick = function() {
        setFavourite();
    };
});


function loadMessages() {
    const title = document.querySelector('title').textContent;
    const queryString = 'title=' + encodeURIComponent(title);
    const url = 'getMessages.php?' + queryString;

    const xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Parse della risposta JSON
            console.log(xhr.responseText);
            try {
                const data = JSON.parse(xhr.responseText);
                getMessages(data);
            } catch (error) {
                console.error("Errore durante il parsing JSON:", error);
            }
        }
    };
    xhr.send();
}

function getMessages(data) {
    let forum = document.getElementById("Forum");
    let div = document.createElement("div");
    div.classList.add("container-commento");
    data.forEach(element => {

        let nodeUser = document.createElement("p");
        let textNodeUser = document.createTextNode(element.Nick);
        nodeUser.appendChild(textNodeUser);
        nodeUser.classList.add("nick-commento"); 
        div.appendChild(nodeUser);

        let nodeContent = document.createElement("p");
        let textNodeContent = document.createTextNode(element.Contenuto);
        nodeContent.appendChild(textNodeContent); 
        nodeContent.classList.add("contenuto-commento");
        div.appendChild(nodeContent);
    });
    forum.appendChild(div);
}

function setFavourite() {
    const title = document.querySelector('title').textContent;
    // Invia i dati del modulo al server utilizzando AJAX
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'back-wiki.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var message = document.getElementById("favoriteMessage");
            if (xhr.responseText.trim() === 'Wiki aggiunta ai preferiti con successo.') {
                // Se la risposta contiene 'Wiki aggiunta ai preferiti', il cuore diventa rosso
                var favoriteButton = document.getElementById("favoriteButton");
                var svgPath = favoriteButton.querySelector("svg path");
                svgPath.style.fill = "red";
                message.textContent = "Aggiunto ai preferiti!";
            } else {
                // Altrimenti, il cuore diventa grigio
                var favoriteButton = document.getElementById("favoriteButton");
                var svgPath = favoriteButton.querySelector("svg path");
                svgPath.style.fill = "grey";
                message.textContent = "Rimosso dai preferiti!";
            }
            message.style.display = "block";
            setTimeout(function() {
                message.style.display = "none";
            }, 3000); // Nasconde il messaggio dopo 3 secondi
        }
    };
    
    // Invia i dati del modulo al server
    xhr.send('title=' + encodeURIComponent(title));
}