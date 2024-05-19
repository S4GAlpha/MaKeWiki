<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connessione al database
    $conn = new mysqli('localhost', 'root', '', 'makewiki');

    // Controlla la connessione al database
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    // Recupera i dati inviati dal form di accesso
    $email = $conn->real_escape_string($_POST['email']); // Evita SQL Injection
    $password = md5($_POST['password']); // Utilizza un algoritmo di hashing sicuro

    // Verifica le credenziali dell'utente usando un prepared statement
    $stmt = $conn->prepare("SELECT Nick, Nome, Cognome, email, isadmin, wiki_count FROM utenti WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($nick, $nome, $cognome, $email, $isadmin, $wikiCount);
        $stmt->fetch();

        // Accesso riuscito, salva le informazioni dell'utente in sessione
        $_SESSION['user_nick'] = $nick;
        $_SESSION['user_nome'] = $nome;
        $_SESSION['user_cognome'] = $cognome;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_isadmin'] = (bool)$isadmin; // Converte il valore in un booleano
        $_SESSION['user_wikiCount'] = $wikiCount;

        // Chiudi lo statement
        $stmt->close();

        header("Location: ../home.php"); // Assicurati di indirizzare correttamente
        exit(); // Assicurati di terminare l'esecuzione dopo un reindirizzamento header
    } else {
        echo "Credenziali non valide";
    }

    // Chiudi la connessione al database
    $conn->close();
}
?>
