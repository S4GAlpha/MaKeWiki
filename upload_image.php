<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        // Nome e percorso del file
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $uploadFileDir = './uploaded_images/';
        $dest_path = $uploadFileDir . $fileName;

        // Crea la directory se non esiste
        if (!file_exists($uploadFileDir)) {
            mkdir($uploadFileDir, 0777, true);
        }

        // Verifica se il file esiste già
        if (file_exists($dest_path)) {
            echo json_encode(['path' => $dest_path, 'message' => 'Il file esiste già.']);
        } else {
            // Sposta il file dalla directory temporanea alla destinazione
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                $servername = "localhost"; 
                $username = "root";
                $password = "";
                $dbname = "makewiki";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $fileNameEscaped = $conn->real_escape_string($fileName);
                $destPathEscaped = $conn->real_escape_string($dest_path);

                $sql = "INSERT INTO immagini (NomeFile, path) VALUES ('$fileNameEscaped', '$destPathEscaped')";

                if ($conn->query($sql) === TRUE) {
                    echo json_encode(['path' => $dest_path, 'message' => 'File caricato e dettagli inseriti nel database.']);
                } else {
                    echo json_encode(['error' => 'Errore nell\'inserimento dei dettagli del file nel database.']);
                }

                $conn->close();
            } else {
                echo json_encode(['error' => 'Errore nel caricamento del file.']);
            }
        }
    } else {
        echo json_encode(['error' => 'Nessun file caricato o errore nel caricamento.']);
    }
} else {
    echo json_encode(['error' => 'Metodo di richiesta non supportato.']);
}
?>
