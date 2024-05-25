<?php
error_reporting(E_ALL);

session_start();

$email=$_SESSION['user_email'];

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

$response = [];

// Query per selezionare l'ID utente corrispondente all'email
$sql_select_user_id = "SELECT ID_utente FROM utenti WHERE email = ?";
$stmt_select_user_id = $conn->prepare($sql_select_user_id);
$stmt_select_user_id->bind_param("s", $email);
$stmt_select_user_id->execute();
$stmt_select_user_id->bind_result($ID_utente);
$stmt_select_user_id->fetch();
$stmt_select_user_id->close();

$response['debug']=isset($_FILES['file']);
// Gestione del caricamento del file
if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
    // Nome e percorso del file
    $uploadDir = './uploaded_images/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }
    $fileTmpPath = $_FILES['file']['tmp_name'];
    $fileName = basename($_FILES['file']['name']);
    $filePath = $uploadDir . $fileName;

    // Verifica se il file esiste già
    if (file_exists($filePath)) {
        // Se il file esiste già, ottieni l'ID dell'immagine
        $sql_get_image_id = "SELECT ID_immagine FROM immagini WHERE path = ?";
        $stmt_get_image_id = $conn->prepare($sql_get_image_id);
        $stmt_get_image_id->bind_param("s", $filePath);
        $stmt_get_image_id->execute();
        $stmt_get_image_id->bind_result($image_id);
        $stmt_get_image_id->fetch();
        $stmt_get_image_id->close();

        // Verifica se esiste già un'associazione immagine-utente
        $sql_check_user_image = "SELECT COUNT(*) FROM imm_user WHERE fk_id_utente = ? AND fk_id_immagine = ?";
        $stmt_check_user_image = $conn->prepare($sql_check_user_image);
        $stmt_check_user_image->bind_param("ii", $ID_utente,$image_id);
        $stmt_check_user_image->execute();
        $stmt_check_user_image->bind_result($count);
        $stmt_check_user_image->fetch();
        $stmt_check_user_image->close();

        if ($count > 0) {
            // Se esiste già un'associazione, aggiorna con l'ID dell'immagine esistente
            $sql_update_user_image = "UPDATE imm_user SET fk_id_immagine = ? WHERE fk_id_utente = ?";
            $stmt_update_user_image = $conn->prepare($sql_update_user_image);
            $stmt_update_user_image->bind_param("ii", $image_id, $ID_utente);
            $stmt_update_user_image->execute();
            $stmt_update_user_image->close();
        } else {
            // Altrimenti, crea una nuova associazione con l'ID dell'immagine esistente
            $sql_insert_user_image = "INSERT INTO imm_user (fk_id_utente, fk_id_immagine) VALUES (?, ?)";
            $stmt_insert_user_image = $conn->prepare($sql_insert_user_image);
            $stmt_insert_user_image->bind_param("ii", $ID_utente, $image_id);
            $stmt_insert_user_image->execute();
            $stmt_insert_user_image->close();
        }

        $response['path'] = $filePath;
        $response['message'] = 'File esistente caricato con successo.';
    } else {
        // Sposta il file caricato nella directory di destinazione
        if (move_uploaded_file($fileTmpPath, $filePath)) {
            // Salva il percorso dell'immagine nella tabella 'immagini'
            $sql_insert_image = "INSERT INTO immagini (NomeFile, path) VALUES (?, ?)";
            $stmt_insert_image = $conn->prepare($sql_insert_image);
            $stmt_insert_image->bind_param("ss", $fileName, $filePath);
            $stmt_insert_image->execute();
            $image_id = $stmt_insert_image->insert_id;
            $stmt_insert_image->close();

            // Crea una nuova associazione immagine-utente
            $sql_insert_user_image = "INSERT INTO imm_user (fk_id_utente, fk_id_immagine) VALUES (?, ?)";
            $stmt_insert_user_image = $conn->prepare($sql_insert_user_image);
            $stmt_insert_user_image->bind_param("ii", $ID_utente, $image_id);
            $stmt_insert_user_image->execute();
            $stmt_insert_user_image->close();

            $response['path'] = $filePath;
            $response['message'] = 'File caricato e dettagli inseriti nel database.';
        } else {
            $response['error'] = 'Errore durante il caricamento del file.';
        }
    }
}

// Gestione dell'aggiornamento della descrizione
if (isset($_POST['descrizione'])) {
    $descrizione = $_POST['descrizione'];

    // Query per aggiornare la descrizione nel database
    $sql_update_description = "UPDATE utenti SET descrizione = ? WHERE ID_utente = ?";
    $stmt_update_description = $conn->prepare($sql_update_description);
    $stmt_update_description->bind_param("si", $descrizione, $ID_utente);
    if ($stmt_update_description->execute()) {
        $response['message'] = 'Descrizione aggiornata con successo.';
    } else {
        $response['error'] = 'Errore durante l\'aggiornamento della descrizione.';
    }
    $stmt_update_description->close();
}

$conn->close();

echo json_encode($response);
?>
