<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connessione al database
    $conn = new mysqli('localhost', 'root', '', 'makewiki');

    // Controlla la connessione al database
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    // Recupera i dati inviati dal form di registrazione
    $nick = $_POST['nick'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Utilizza MD5 per codificare la password
    $isadmin = 0; // Imposta il valore di default per isadmin a 0 (utente non admin)

    // Verifica se l'email è già registrata
    $checkEmailQuery = "SELECT * FROM utenti WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        echo "Errore nella registrazione: L'indirizzo email è già registrato.";
    } else {
        // Inserisci i dati nella tabella degli utenti utilizzando prepared statement
        $insertQuery = "INSERT INTO utenti (Nick, Nome, Cognome, email, password, isadmin) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);

        if ($stmt === false) {
            die("Errore nella preparazione dello statement: " . $conn->error);
        }

        // Associa i parametri con i valori forniti da $_POST
        $stmt->bind_param("sssssi", $nick, $nome, $cognome, $email, $password, $isadmin);

        // Esegui lo statement
        if ($stmt->execute()) {
            $_SESSION['user_nick'] = $nick;
            $_SESSION['user_nome'] = $nome;
            $_SESSION['user_cognome'] = $cognome;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_isadmin'] = false; // Imposta isadmin a false per un nuovo utente
            echo "Registrazione avvenuta con successo";
            header("Location: ../home.php");
        } else {
            echo "Errore nella registrazione: " . $stmt->error;
        }

        // Chiudi lo statement
        $stmt->close();
    }

    // Chiudi la connessione al database
    $conn->close();
}
?>
