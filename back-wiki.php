<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connessione al database (modifica le credenziali in base al tuo ambiente)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "makewiki";

    // Crea la connessione
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la connessione
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    $user_email = $_SESSION['user_email'];
    $title = $_POST['title'];

    // Ottieni l'ID dell'utente dal database usando l'email
    $userQuery = "SELECT ID_utente FROM utenti WHERE email = ?";
    $stmt = $conn->prepare($userQuery);
    $stmt->bind_param("s", $user_email);
    $stmt->execute();
    $userResult = $stmt->get_result();

    if ($userResult->num_rows > 0) {
        $userRow = $userResult->fetch_assoc();
        $user_id = $userRow['ID_utente'];

        // Ottieni l'ID della wiki usando il titolo
        $wikiQuery = "SELECT ID_wiki FROM wikipages WHERE titolo = ?";
        $stmt = $conn->prepare($wikiQuery);
        $stmt->bind_param("s", $title);
        $stmt->execute();
        $wikiResult = $stmt->get_result();

        if ($wikiResult->num_rows > 0) {
            $wikiRow = $wikiResult->fetch_assoc();
            $wiki_id = $wikiRow['ID_wiki'];

            // Verifica se la wiki è già tra i favoriti dell'utente
            $checkQuery = "SELECT * FROM preferenze WHERE fk_ID_wiki = ? AND fk_ID_utente = ?";
            $stmt = $conn->prepare($checkQuery);
            $stmt->bind_param("ii", $wiki_id, $user_id);
            $stmt->execute();
            $checkResult = $stmt->get_result();

            if ($checkResult->num_rows > 0) {
                // La wiki è già tra le preferenze, quindi rimuovila
                $deleteQuery = "DELETE FROM preferenze WHERE fk_ID_wiki = ? AND fk_ID_utente = ?";
                $stmt = $conn->prepare($deleteQuery);
                $stmt->bind_param("ii", $wiki_id, $user_id);
                if ($stmt->execute() === TRUE) {
                    echo "Wiki rimossa dai preferiti con successo.";
                } else {
                    echo "Errore durante la rimozione della wiki: " . $conn->error;
                }
            } else {
                // La wiki non è tra le preferenze, quindi aggiungila
                $insertQuery = "INSERT INTO preferenze (fk_ID_wiki, fk_ID_utente) VALUES (?, ?)";
                $stmt = $conn->prepare($insertQuery);
                $stmt->bind_param("ii", $wiki_id, $user_id);
                if ($stmt->execute() === TRUE) {
                    echo "Wiki aggiunta ai preferiti con successo.";
                } else {
                    echo "Errore durante l'aggiunta della wiki: " . $conn->error;
                }
            }
        } else {
            echo "Wiki non trovata.";
            echo $title;
        }
    } else {
        echo "Utente non trovato.";
    }

    // Chiudi la connessione
    $conn->close();
}
?>
