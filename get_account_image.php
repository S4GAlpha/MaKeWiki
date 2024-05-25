<?php
session_start();
$email = $_SESSION['user_email'];

// Configurazione del database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "makewiki";

// Crea la connessione
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Query per ottenere il percorso dell'immagine dell'account dal database
$sql = "SELECT immagini.path 
        FROM immagini 
        INNER JOIN imm_user ON immagini.ID_immagine = imm_user.fk_id_immagine 
        INNER JOIN utenti u ON imm_user.fk_id_utente = u.ID_utente  
        WHERE u.email='$email'"; 
$result = $conn->query($sql);

$response = [];

if ($result->num_rows > 0) {
    // Ottieni il percorso dell'immagine dell'account
    $row = $result->fetch_assoc();
    $accountImagePath = $row["path"];
    
    // Aggiungi il percorso dell'immagine all'array di risposta
    $response['path'] = $accountImagePath;
} else {
    // Nessuna immagine dell'account trovata
    $response['error'] = "Nessuna immagine dell'account trovata.";
}

// Chiudi la connessione al database
$conn->close();

// Restituisci la risposta come JSON
echo json_encode($response);
?>
