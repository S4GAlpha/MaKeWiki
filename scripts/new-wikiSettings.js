document.addEventListener('DOMContentLoaded', function () {
    // Funzione per costruire gli elementi HTML per l'account utente
    function buildUserAccount(data) {
        var navbar = document.getElementById('navbar');
        var accountItem = document.createElement('li');
        accountItem.classList.add('navbar-item', 'flexbox-left');
        
        var accountLink = document.createElement('a');
        accountLink.classList.add('navbar-item-inner', 'flexbox-left');
        accountLink.href = 'account.php';

        var accountIconWrapper = document.createElement('div');
        accountIconWrapper.classList.add('navbar-item-inner-icon-wrapper', 'flexbox');
        var accountIcon = document.createElement('img');
        accountIcon.src = 'images/navbar/users.png';
        accountIcon.alt = 'Account Icon';
        accountIcon.style.width = '20px';
        accountIcon.style.height = '20px';
        accountIconWrapper.appendChild(accountIcon);
        
        var accountText = document.createElement('span');
        accountText.classList.add('link-text');
        accountText.style.color = '#ffff';
        accountText.textContent = data.nick;

        accountLink.appendChild(accountIconWrapper);
        accountLink.appendChild(accountText);
        accountItem.appendChild(accountLink);
        
        navbar.appendChild(accountItem);

        // Se l'utente ha wikiCount maggiore di 0, aggiungiamo il link alla wiki
        if (data.wikiCount > 0) {
            var wikiItem = document.createElement('li');
            wikiItem.classList.add('navbar-item', 'flexbox-left');

            var wikiLink = document.createElement('a');
            wikiLink.classList.add('navbar-item-inner', 'flexbox-left');
            wikiLink.href = 'wiki.php';

            var wikiIconWrapper = document.createElement('div');
            wikiIconWrapper.classList.add('navbar-item-inner-icon-wrapper', 'flexbox');
            var wikiIcon = document.createElement('img');
            wikiIcon.src = 'images/navbar/wiki.png';
            wikiIcon.alt = 'Wiki Icon';
            wikiIcon.style.width = '20px';
            wikiIcon.style.height = '20px';
            wikiIconWrapper.appendChild(wikiIcon);

            var wikiText = document.createElement('span');
            wikiText.classList.add('link-text');
            wikiText.style.color = '#ffff';
            wikiText.textContent = 'WIKI';

            wikiLink.appendChild(wikiIconWrapper);
            wikiLink.appendChild(wikiText);
            wikiItem.appendChild(wikiLink);
            
            navbar.appendChild(wikiItem);
        }

        // Aggiungiamo il link per creare una nuova wiki
        var createWikiItem = document.createElement('li');
        createWikiItem.classList.add('navbar-item', 'flexbox-left');
        
        var createWikiLink = document.createElement('a');
        createWikiLink.classList.add('navbar-item-inner', 'flexbox-left');
        createWikiLink.href = 'new-wiki.php';
        
        var createWikiIconWrapper = document.createElement('div');
        createWikiIconWrapper.classList.add('navbar-item-inner-icon-wrapper', 'flexbox');
        var createWikiIcon = document.createElement('img');
        createWikiIcon.src = 'images/navbar/new-wiki.png';
        createWikiIcon.alt = 'New Wiki Icon';
        createWikiIcon.style.width = '20px';
        createWikiIcon.style.height = '20px';
        createWikiIconWrapper.appendChild(createWikiIcon);
        
        var createWikiText = document.createElement('span');
        createWikiText.classList.add('link-text');
        createWikiText.style.color = '#ffff';
        createWikiText.textContent = 'Crea WIKI';

        createWikiLink.appendChild(createWikiIconWrapper);
        createWikiLink.appendChild(createWikiText);
        createWikiItem.appendChild(createWikiLink);
        
        navbar.appendChild(createWikiItem);
    }

    // Funzione per costruire gli elementi HTML per l'utente ospite
    function buildGuestAccount() {
        var navbar = document.getElementById('navbar');
        var guestItem = document.createElement('li');
        guestItem.classList.add('navbar-item', 'flexbox-left');
        
        var guestLink = document.createElement('a');
        guestLink.classList.add('navbar-item-inner', 'flexbox-left');
        guestLink.href = 'account.php';

        var guestIconWrapper = document.createElement('div');
        guestIconWrapper.classList.add('navbar-item-inner-icon-wrapper', 'flexbox');
        var guestIcon = document.createElement('img');
        guestIcon.src = 'images/navbar/users.png';
        guestIcon.alt = 'Login Icon';
        guestIcon.style.width = '20px';
        guestIcon.style.height = '20px';
        guestIconWrapper.appendChild(guestIcon);
        
        var guestText = document.createElement('span');
        guestText.classList.add('link-text');
        guestText.style.color = '#ffff';
        guestText.textContent = 'Ospite';

        guestLink.appendChild(guestIconWrapper);
        guestLink.appendChild(guestText);
        guestItem.appendChild(guestLink);
        
        navbar.appendChild(guestItem);
    }

    // Richiesta AJAX per ottenere i dati dall'account_session.php
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'account_session.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = JSON.parse(xhr.responseText);
            if (data.nick !== "") {
                buildUserAccount(data); // Costruisci gli elementi HTML per l'account utente
                if(document.title=="Prova Nuova Wiki"){ //se il titolo è quello della pagina di creazzione allora mettiamo il nick dell'utente che sta per crearla
                    // Aggiunge il testo del nick all'elemento con id 'textList'
                    document.getElementById('textList').innerText = data.nick;
                } else if(data.nick==document.getElementById('textList').textContent.trim()){ // se il nick dell'autore corrisponde all'utente può modificare la wiki
                    // Rendere i contenuti non modificabili
                    document.getElementsByClassName('fixed-card')[0].style.display = 'block';
                    document.getElementById('textTitle').contentEditable = "true";
                    document.getElementById('textList').contentEditable = "true";
                    document.querySelectorAll('.uploadForm').forEach(form => {
                        form.closest('.inner-column').style.pointerEvents = 'block';
                    });        
                    document.querySelectorAll('[contenteditable="true"]').forEach(element => {
                    element.contentEditable = "true";
                    });
                    document.querySelectorAll('.video-input').forEach(input => {
                    input.disabled = false;
                    });
                }
                // Aggiunge il testo dell'email all'elemento con id 'input-email'
                document.getElementById('input-email').innerText = data.email;
                // Aggiunge il testo del titolo alla textarea con id 'input-wiki'
                document.getElementById('input-wiki').innerText = document.getElementById('textTitle').textContent;
            } else {
                buildGuestAccount(); // Costruisci gli elementi HTML per l'utente ospite
                // Aggiunge il testo dell'email all'elemento con id 'input-email'
                document.getElementById('input-email').innerText = " ";
                // Aggiunge il testo del titolo alla textarea con id 'input-wiki'
                document.getElementById('input-wiki').innerText = " ";
            }
        } else {
            // Gestione degli errori
            console.error(xhr.statusText);
        }
    };
    xhr.send();

    document.querySelectorAll('.fileInput').forEach(input => {
        input.addEventListener('change', function() {
            const formData = new FormData();
            formData.append('file', this.files[0]);
    
            fetch('upload_image.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.path) {
                    // Trova l'indice dell'input per aggiornare l'immagine corretta
                    const index = this.getAttribute('data-index');
                    const imageContainer = document.querySelector(`.imageContainer[data-index="${index}"]`);
    
                    // Crea un nuovo elemento immagine e imposta il percorso dell'immagine caricata
                    const img = document.createElement('img');
                    img.src = data.path;
                    img.style.width = '100%';
                    img.style.height = '100%';
                    img.style.borderTopLeftRadius = '10px';
                    img.style.borderTopRightRadius = '10px';
    
                    // Svuota il contenitore dell'immagine e aggiungi la nuova immagine
                    imageContainer.innerHTML = '';
                    imageContainer.appendChild(img);
    
                    // Mostra un messaggio se il file esiste già
                    if (data.message) {
                        alert(data.message);
                    }
                } else if (data.error) {
                    alert(data.error);
                }
            })
            .catch(error => {
                console.error('Errore:', error);
            });
        });
    });    

    document.getElementById('saveButton').addEventListener('click', function() {
        document.title = document.getElementById('textTitle').textContent;
        // Rendere i contenuti non modificabili
        document.getElementsByClassName('fixed-card')[0].style.display = 'none';
        document.getElementById('textTitle').contentEditable = "false";
        document.getElementById('textList').contentEditable = "false";
        document.querySelectorAll('.uploadForm').forEach(form => {
            form.closest('.inner-column').style.pointerEvents = 'none';
        });        
        document.querySelectorAll('[contenteditable="true"]').forEach(element => {
        element.contentEditable = "false";
        });
        document.querySelectorAll('.video-input').forEach(input => {
        input.disabled = true;
        });

        // Invia i dati al server PHP
        var formData = new FormData();
        var title = document.getElementById('textTitle').innerText;
        var content = document.documentElement.outerHTML;
        formData.append('title', title);
        formData.append('content', content);

        fetch('save_page.php', {
        method: 'POST',
        body: formData
        })
        .then(response => response.text())
        .then(data => {
        alert(data); // Mostra eventuali messaggi di conferma dal server
        })
        .catch(error => {
        console.error('Errore:', error);
        });
    });


});