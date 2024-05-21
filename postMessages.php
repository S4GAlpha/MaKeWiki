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

    // Estrai i dati dal form
    $email= $_POST['email'];
    $wiki = $_POST['wiki'];
    $commit = $_POST['commit'];

    // Prepara e esegui la query per inserire il nuovo messaggio nel database
    $stmt = $conn->prepare("INSERT INTO messaggi (FK_ID_utenti, FK_ID_wiki, Contenuto) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $fk_ID_utente, $fk_ID_wiki, $contenuto);

    // Ottieni l'ID dell'utente dal nickname
    $result = $conn->query("SELECT ID_utente FROM utenti WHERE email = '$email'");
    $row = $result->fetch_assoc();
    $fk_ID_utente = $row['ID_utente'];

    // Ottieni l'ID della wiki dal titolo
    $result = $conn->query("SELECT ID_wiki FROM wikipages WHERE Titolo = '$wiki'");
    $row = $result->fetch_assoc();
    $fk_ID_wiki = $row['ID_wiki'];

    $contenuto = $commit;

    // Esegui la query preparata
    if ($stmt->execute() === TRUE) {
        echo "Nuovo messaggio inserito con successo.";
        header("Location: ".$wiki.".php");
    } else {
        echo "Errore nell'inserimento del messaggio: " . $stmt->error;
    }

    // Chiudi la connessione
    $stmt->close();
    $conn->close();
} else {
    echo "Metodo di richiesta non valido.";
}
?>
