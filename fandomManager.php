<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    $email = $_SESSION['user_email']; // Supponendo che l'email dell'utente sia memorizzata nella sessione
    $titolo = $_POST['titolo'];
    $descrizione = $_POST['descrizione'];
    $immagine = $_POST['immagine']; // Link dell'immagine
    $tipo = "Post";

    // Prepara e bind per ottenere l'ID utente
    $stmt = $conn->prepare("SELECT ID_utente FROM utenti WHERE email = ?");
    $stmt->bind_param("s", $email);

    // Esegui la query
    if (!$stmt->execute()) {
        echo "Errore nella query: " . $stmt->error;
        exit();
    }

    // Ottieni il risultato della query
    $result = $stmt->get_result();

    // Verifica se sono stati trovati risultati
    if ($result->num_rows > 0) {
        // Ottieni la riga risultante
        $row = $result->fetch_assoc();
        // Ottieni l'ID utente corrispondente all'email
        $userID = $row["ID_utente"];

        // Inserisci il link dell'immagine nella tabella immagini, se non esiste già
        $stmt = $conn->prepare("SELECT ID_immagine FROM immagini WHERE path = ?");
        $stmt->bind_param("s", $immagine);

        if (!$stmt->execute()) {
            echo "Errore nella query: " . $stmt->error;
            exit();
        }

        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imageID = $row["ID_immagine"];

            // Prepara e bind per inserire il messaggio
            $stmt = $conn->prepare("INSERT INTO wikipages (Titolo, fk_id_utente, Descrizione, Tipologia, Data) VALUES (?, ?, ?, ?, NOW())");
            $stmt->bind_param("siss",$titolo, $userID, $descrizione, $tipo);

            // Esegui la query
            if ($stmt->execute()) {
                $postID = $conn->insert_id;
                echo 'Messaggio salvato con successo.';

                // Crea la relazione tra il post e l'immagine nella tabella imm_wiki
                $tipo = "Post"; // Può essere utilizzato per distinguere il tipo di immagine
                $stmt = $conn->prepare("INSERT INTO imm_wiki (fk_id_immagine, fk_id_wiki, tipo) VALUES (?, ?, ?)");
                $stmt->bind_param("iis", $imageID, $postID, $tipo);

                if ($stmt->execute()) {
                    echo 'Relazione post-immagine salvata con successo nella tabella imm_wiki.';
                } else {
                    echo 'Errore nella creazione della relazione post-immagine nella tabella imm_wiki.';
                }
            } else {
                echo 'Errore nell\'inserimento del messaggio nel database.';
            }
        } else {
            echo 'Errore: l\'immagine non è presente nel database.';
            exit();
        }
    } else {
        echo 'Utente non trovato.';
    }

    $stmt->close();
    $conn->close();
}
?>
