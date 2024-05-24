<?php
session_start();

// Assumiamo che l'utente sia autenticato e il nome utente sia disponibile nella sessione.
if (isset($_SESSION['user_nome']) && isset($_SESSION['user_nick'])) {
    $nome = $_SESSION['user_nome'];
    $cognome = $_SESSION['user_cognome'];
    $nick = $_SESSION['user_nick'];
    $email = $_SESSION['user_email'];
    $isAdmin = $_SESSION['user_isadmin'];
    $wikiCount = isset($_SESSION['user_wikiCount']) ? $_SESSION['user_wikiCount'] : 0;
} else {
    $nome = "Ospite";  // Imposta un valore di default se l'utente non è loggato
    $cognome = "";
    $nick = "";
    $email = "unknown";
    $isAdmin = false;
    $wikiCount = 0; // Default value when not logged in
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se sono stati inviati i dati corretti
    if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['description']) && isset($_POST['type'])) {
        // Ottieni i dati inviati
        $title = $_POST['title'];
        $content = $_POST['content'];
        $description = $_POST['description'];
        $type = $_POST['type'];
        $logo = $_POST['Logo'];

        // Rendi sicuro il titolo per l'uso come nome file
        $safeTitle = preg_replace('/[^a-zA-Z0-9-_]/', '_', $title);
        $fileName = $safeTitle . '.php';
        $filePath = $fileName;

        if (file_put_contents($filePath, $content) !== false) {
            // Connessione al database
            $servername = "localhost"; 
            $username = "root"; 
            $password = ""; 
            $dbname = "makewiki"; 

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Controlla la connessione
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepara e bind
            $stmt = $conn->prepare("SELECT ID_utente FROM utenti WHERE email = ?");
            $stmt->bind_param("s", $email);

            // Esegui la query
            $stmt->execute();

            // Ottieni il risultato della query
            $result = $stmt->get_result();

            // Verifica se sono stati trovati risultati
            if ($result->num_rows > 0) {
                // Ottieni la riga risultante
                $row = $result->fetch_assoc();
                // Ottieni l'ID utente corrispondente all'email
                $userID = $row["ID_utente"];
            }

            // Prepara e bind
            $stmt = $conn->prepare("INSERT INTO wikipages (Titolo, fk_id_utente, Descrizione, Tipologia, pathWiki, Data) VALUES (?, ?, ?, ?, ?, CURDATE())");
            $stmt->bind_param("sisss", $title, $userID, $description, $type, $filePath);

            // Esegui la query
            if ($stmt->execute()) {
                $wikiID = $conn->insert_id;
                echo 'Pagina salvata con successo e registrata nel database: ' . $fileName;
            } else {
                echo 'Errore nell\'inserimento dei dettagli della pagina nel database.';
            }

            if(isset($logo)){
                // Prepara e bind
                $stmt = $conn->prepare("SELECT ID_immagine FROM immagini WHERE path = ?");
                $stmt->bind_param("s", $logo);

                // Esegui la query
                $stmt->execute();
            }

            // Ottieni il risultato della query
            $result = $stmt->get_result();
            $imgID;
            // Verifica se sono stati trovati risultati
            if ($result->num_rows > 0) {
                // Ottieni la riga risultante
                $row = $result->fetch_assoc();
                $imgID = $row["ID_immagine"];
            }

            $logo="Logo";
            // Prepara e bind
            $stmt = $conn->prepare("INSERT INTO imm_wiki (fk_id_immagine, fk_id_wiki, tipo) VALUES (?, ?, ?)");
            $stmt->bind_param("iis", $imgID, $wikiID, $logo);

            // Esegui la query
            if ($stmt->execute()) {
                echo 'Record immagine-wiki inserito con successo nella tabella imm_wiki.';
            } else {
                echo 'Errore nell\'inserimento del record immagine-wiki nella tabella imm_wiki.';
            }

            // Chiudi la connessione
            $stmt->close();
            $conn->close();
        } else {
            echo 'Errore nel salvataggio della pagina.';
        }
    } else {
        echo 'Errore: dati non validi.';
    }
} else {
    echo 'Metodo di richiesta non supportato.';
}
?>
