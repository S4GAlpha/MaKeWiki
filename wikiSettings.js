// Ottieni la finestra modale di conferma cancellazione
var newCommentModal = document.getElementById("newCommentModal");
// Ottieni l'elemento <span> che chiude la finestra modale di conferma cancellazione
var newCommentModalClose = document.querySelector("#newCommentModal .close");


document.addEventListener('DOMContentLoaded', function () {

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
            console.log(xhr.responseText); 
        }
    };
    
    // Invia i dati del modulo al server
    xhr.send('title=' + encodeURIComponent(title));
}