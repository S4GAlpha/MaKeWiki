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
            contentSlider.innerHTML = `
                <label style="font-size: 12px;" for="contentRange${i}">Numero dei contenuti per scheda ${i + 1}: <span id="contentValue${i}">1</span></label>
                <input type="range" id="contentRange${i}" min="1" max="100" value="1" oninput="updateContent(${i}, this.value); updateContentLabel(${i}, this.value);">
            `;
            contentSlidersContainer.appendChild(contentSlider);
        }
        
        // Mostra la prima scheda di default
        showCard(0);
    }


    function updateContentLabel(cardIndex, numContents) {
        var contentValueLabel = document.getElementById(`contentValue${cardIndex}`);
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
            type = 'anime';
        } else {
            type = 'giochi';
        }
    
        var message = 'Modifiche salvate!\n' +
                      'Tipologia: ' + type;
    
        if (type === 'giochi') {
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
                        <img src="images/navbar/new-wiki.png" class="customButton centered-image" data-index="${countGlobale}" alt="" style="width: 20%; height: 50%; margin-top: 12%;"/>
                        <form class="uploadForm" enctype="multipart/form-data" style="display: none;">
                            <input type="file" class="fileInput" data-index="${countGlobale}" accept="image/*">
                        </form>
                        <div class="imageContainer centered-image" data-index="${countGlobale}" style="width: 90%; height: 90%; margin-top: 6%; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bot-left-radius: 0px; border-bot-right-radius: 0px;"></div>
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
    
        document.querySelectorAll('.fileInput').forEach(function(input) {
            input.addEventListener('change', function() {
                var index = this.getAttribute('data-index');
                uploadImage(index);
            });
        });
    
        document.querySelectorAll('.imageContainer').forEach(function(container) {
            container.addEventListener('click', function() {
                var index = this.getAttribute('data-index');
                deleteImage(index);
            });
        });
    }
    
    function uploadImage(index) {
        var input = document.querySelector('.fileInput[data-index="' + index + '"]');
        var file = input.files[0];
    
        if (file) {
            var reader = new FileReader();
    
            reader.onload = function(e) {
                var img = new Image();
                img.src = e.target.result;
                img.style.width = '100%'; // Adatta l'immagine alla larghezza del contenitore
                img.style.height = 'auto'; // Mantiene il rapporto d'aspetto
    
                img.onload = function() {
                    var container = document.querySelector('.imageContainer[data-index="' + index + '"]');
                    container.innerHTML = '';
                    container.appendChild(img);
                    input.style.display = 'none';
                    document.querySelector('.customButton[data-index="' + index + '"]').style.display = 'none';
                };
            };
    
            reader.readAsDataURL(file);
        } else {
            alert('Seleziona un\'immagine prima di caricare!');
        }
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
    