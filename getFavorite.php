<?php
session_start();
header('Content-Type: application/json');

// Configurazione del database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "makewiki";

// Connessione al database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controllo della connessione
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verifica che l'email sia salvata nella sessione
if (isset($_SESSION['user_email'])) {
    $userEmail = $_SESSION['user_email'];

    // Query per ottenere l'ID dell'utente dall'email
    $sql = "SELECT ID_utente FROM utenti WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $userEmail);
    $stmt->execute();
    $stmt->bind_result($userId);
    $stmt->fetch();
    $stmt->close();

    // Se l'utente è stato trovato, ottenere le wikipreferite
    if ($userId) {
        // Query per ottenere le wikipreferite dell'utente
        $sql = "
            SELECT wikipages.ID_wiki, wikipages.Titolo, wikipages.Descrizione, wikipages.Tipologia, wikipages.pathWiki, wikipages.Data
            FROM preferenze
            JOIN wikipages ON preferenze.fk_ID_wiki = wikipages.ID_wiki
            WHERE preferenze.fk_ID_utente = ?
        ";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $userId);
        
        // Esecuzione della query
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $data = $result->fetch_all(MYSQLI_ASSOC);

            echo json_encode($data);
        } else {
            // Gestione degli errori nell'esecuzione della query
            echo json_encode(array("error" => "Query execution error: " . $conn->error));
        }
        $stmt->close();
    } else {
        // Se l'utente non è stato trovato, restituire un errore
        echo json_encode(array("error" => "User not found"));
    }
} else {
    // Se l'email non è salvata nella sessione, restituire un errore
    echo json_encode(array("error" => "User email not in session"));
}

$conn->close();
?>
