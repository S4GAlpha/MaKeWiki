<?php
// Fa in modo che il parsing JSON non dia errori
header('Content-Type: application/json');

// Recupera i dati dalla tabella e mostra in una tabella HTML
$servername = "localhost";
$username = "root"; // Sostituisci con il tuo nome utente del database
$password = ""; // Sostituisci con la tua password del database
$dbname = "makewiki"; // Sostituisci con il nome del tuo database

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Gestione della ricerca
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $title= $_GET["title"];

    // Costruisci la query di ricerca con prepared statement
    $sql_query = "SELECT * FROM messaggi m
                  JOIN wikipages wp ON m.FK_ID_wiki = wp.ID_wiki 
                  JOIN utenti u ON m.FK_ID_utenti = u.ID_utente
                  WHERE wp.Titolo='$title'";

    $stmt = $conn->prepare($sql_query);

    if ($stmt === false) {
        die("Errore nella preparazione dello statement: " . $conn->error);
    }

    // Esegui lo statement
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);

        echo json_encode($data);
    } else {
        die("Errore nell'esecuzione dello statement: " . $stmt->error);
    }

    // Chiudi lo statement
    $stmt->close();
}

// Chiudi la connessione al database
$conn->close();
?>
