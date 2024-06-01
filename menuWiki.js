function toggleOptions() {
      var typeSlider = document.getElementById('typeSlider');
      var cardSlider = document.getElementById('cardSlider');
      var contentSlidersContainer = document.getElementById('contentSlidersContainer');
      var saveButton = document.getElementById('saveButton');
      var anime = document.getElementById('anime');
      var game = document.getElementById('game');
      var animeI = document.getElementById('animeI');
      var gameI = document.getElementById('gameI');
      
      if (typeSlider.value === '0') {
        cardSlider.style.display = 'none';
        contentSlidersContainer.style.display = 'none';
        saveButton.style.display = 'block';
        game.style.display = 'none';
        anime.style.display = 'block';
        gameI.style.display = 'none';
        animeI.style.display = 'block';
      } else if (typeSlider.value === '-1') {
        cardSlider.style.display = 'none';
        contentSlidersContainer.style.display = 'none';
        saveButton.style.display = 'none';
        game.style.display = 'none';
        anime.style.display = 'none';
        gameI.style.display = 'none';
        animeI.style.display = 'none';
      } else {
        cardSlider.style.display = 'block';
        contentSlidersContainer.style.display = 'block';
        saveButton.style.display = 'block';
        game.style.display = 'block';
        anime.style.display = 'none';
        gameI.style.display = 'block';
        animeI.style.display = 'none';
      }
    }

    function updateSlider() {
        var value = document.getElementById('cardRange').value;
        document.getElementById('cardValue').textContent = value;

        // Genera gli slider dei contenuti dinamicamente
        var contentSlidersContainer = document.getElementById('contentSlidersContainer');
        contentSlidersContainer.innerHTML = ''; // Rimuovi tutti i precedenti slider

        // Nascondi tutti i div collapse
        var collapses = document.querySelectorAll('.collapse');
        collapses.forEach(function(collapse) {
        collapse.style.display = 'none';
        });

        // Mostra solo i primi "value" div collapse
        for (var i = 0; i < value; i++) {
        collapses[i].style.display = 'block';
        }

        for (var i = 0; i < value; i++) {
            var contentSlider = document.createElement('div');
            contentSlider.innerHTML =` 
                <label style="font-size: 12px;" for="contentRange${i}">Numero dei contenuti per scheda ${i + 1}: <span id="contentValue${i}">0</span></label>
                <input type="range" id="contentRange${i}" min="0" max="100" value="0" oninput="updateContent(${i}, this.value); updateContentLabel(${i}, this.value);">
            `;
            contentSlidersContainer.appendChild(contentSlider);
        }

        // Mostra la prima scheda di default
        showCard(0);
    }


    function updateContentLabel(cardIndex, numContents) {
        var contentValueLabel = document.getElementById(`contentValue${cardIndex}`);
        if(numContents-1 > 0 || numContents >= 98) contentValueLabel.textContent = numContents-1;
        contentValueLabel.textContent = numContents;
    }
    

    function showCard(cardIndex) {
        var cardIds = ['first', 'second', 'third', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'];
        
        cardIds.forEach(function(id, index) {
            var card = document.getElementById(id);
            if (index === cardIndex) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
    
    function salvaWiki() {
        var type = '';
        var typeSlider = document.getElementById('typeSlider').value;
        var cardValue = document.getElementById('cardRange').value;
    
        if (typeSlider === '0') {
            type = 'nessuno';
        } else if (typeSlider === '-1') {
            type = 'Anime';
        } else {
            type = 'VideoGame';
        }
    
        var message = 'Modifiche salvate!\n' +
                      'Tipologia: ' + type;
    
        if (type === 'VideoGame') {
            message += '\nNumero di schede: ' + cardValue;
    
            for (var i = 0; i < cardValue; i++) {
                var contentValue = document.getElementById(`contentRange${i}`).value;
                message += `\nNumero dei contenuti per scheda ${i + 1}: ${contentValue}`;
            }
        }
    
        alert(message);
    }

    var countGlobale = 4;

    function updateContent(cardIndex, numContents) {
        var cardId = cardIndex === 0 ? 'first' :
                     cardIndex === 1 ? 'second' :
                     cardIndex === 2 ? 'third' :
                     cardIndex === 3 ? 'four' :
                     cardIndex === 4 ? 'five' :
                     cardIndex === 5 ? 'six' :
                     cardIndex === 6 ? 'seven' :
                     cardIndex === 7 ? 'eight' :
                     cardIndex === 8 ? 'nine' : 'ten';
    
        var cardContent = document.getElementById(cardId);
        cardContent.innerHTML = ''; // Rimuovi tutti i precedenti contenuti

        for (var i = 1; i < numContents; i++) {
            var contentItem = document.createElement('div');
            countGlobale++;
            contentItem.innerHTML = `
                <div class="inner-column" style="padding: 0px; text-align: center; margin-top: 5%;">
                    <div style="padding: 0px; width: 100%; margin-left: 0%; margin-top: 0%; border-bot-left-radius: 0px; border-bot-right-radius: 0px;">
                        <img src="images/navbar/new-wiki.png" class="customButton centered-image" data-index="${countGlobale}" alt="" style="width: 10%; height: fit-content; margin-top: 12%;"/>
                        <form class="uploadForm" enctype="multipart/form-data" style="display: none;">
                            <input type="file" class="fileInput" data-index="${countGlobale}" accept="image/*">
                        </form>
                        <div class="imageContainer centered-image" data-index="${countGlobale}" style="width: 90%; height: fit-content; margin-top: 6%; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bot-left-radius: 0px; border-bot-right-radius: 0px;"></div>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <a class="contenteditable" style="font-size: 12px; display: block; width: 80%; margin-left: 10%; border: none;" contenteditable="true">
                                    Inserisci qui la descrizione ${i}
                                </a><br>
                            </li>
                        </ul>
                    </div>
                </div>
            `;
            cardContent.appendChild(contentItem);
        }
        
        // Aggiungi event listener per i nuovi elementi
        addEventListenersToDynamicElements();
    }
    
    function addEventListenersToDynamicElements() {
        document.querySelectorAll('.customButton').forEach(function(button) {
            button.addEventListener('click', function() {
                var index = this.getAttribute('data-index');
                document.querySelector('.fileInput[data-index="' + index + '"]').click();
            });
        });
    
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
                        document.querySelector('.customButton[data-index="' + index + '"]').style.display = 'none';
        
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
    
        document.querySelectorAll('.imageContainer').forEach(function(container) {
            container.addEventListener('click', function() {
                var index = this.getAttribute('data-index');
                deleteImage(index);
            });
        });
    }
    
    function deleteImage(index) {
        var container = document.querySelector('.imageContainer[data-index="' + index + '"]');
        container.innerHTML = '';
        document.querySelector('.fileInput[data-index="' + index + '"]').value = '';
        document.querySelector('.customButton[data-index="' + index + '"]').style.display = 'block';
    }
    
    // Inizializza gli event listener per gli elementi statici quando il DOM è completamente caricato
    document.addEventListener('DOMContentLoaded', function() {
        addEventListenersToDynamicElements();
    });
    