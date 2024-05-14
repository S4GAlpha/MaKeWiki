var popupBlockerActive = false;
var adBlockerActive = false;

window.onload = function() {
    // Verifica se il browser supporta il blocco dei popup
    var testPopup = window.open("", "", "width=100,height=100");
    if (testPopup === null || typeof(testPopup) === 'undefined') {
        popupBlockerActive = true;
    } else {
        testPopup.close();
    }

    // Verifica periodica del blocco degli annunci
    var intervalID = setInterval(checkAdBlocker, 100); // Esegui la verifica ogni secondo

    // Funzione per aggiornare l'interfaccia utente
    function updateUI() {
        if (popupBlockerActive || adBlockerActive) {
            document.getElementById('adblock-warning').style.display = 'block';
            document.getElementById('ads').style.display = 'none';
        } else {
            document.getElementById('adblock-warning').style.display = 'none';
            document.getElementById('ads').style.display = 'block';
        }
    }
    
    function checkAdBlocker() {
        var adImage = document.getElementById('ads');
        var adBlockTest = document.createElement('div');
        adBlockTest.innerHTML = '&nbsp;';
        adBlockTest.className = 'ad';
        document.body.appendChild(adBlockTest);
        if (adBlockTest.offsetHeight === 0) {
            adBlockerActive = true;
        } else {
            adBlockerActive = false;
        }
        adBlockTest.remove();
        
        // Aggiorna l'interfaccia utente
        updateUI();
    }

    // Utilizziamo MutationObserver per rilevare cambiamenti nel DOM
    var observer = new MutationObserver(function(mutationsList) {
        // Quando viene rilevata una modifica nel DOM, aggiorniamo l'interfaccia utente
        updateUI();
    });

    // Configuriamo l'observer per osservare i cambiamenti nei nodi del documento
    observer.observe(document.body, { attributes: true, childList: true, subtree: true });
}