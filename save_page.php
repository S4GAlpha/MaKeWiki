<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se sono stati inviati i dati corretti
    if (isset($_POST['title']) && isset($_POST['content'])) {
        // Ottieni il titolo e il contenuto
        $title = $_POST['title'];
        $content = $_POST['content'];

        // Rendi sicuro il titolo per l'uso come nome file
        $safeTitle = preg_replace('/[^a-zA-Z0-9-_]/', '_', $title);
        $fileName = $safeTitle . '.php';
        $filePath = $fileName;

        // Salva il contenuto nel file
        if (file_put_contents($filePath, $content) !== false) {
            echo 'Pagina salvata con successo: ' . $fileName;
        } else {
            echo 'Errore nel salvataggio della pagina.';
        }
    } else {
        echo 'Errore: dati non validi.';
    }
} else {
    echo 'Metodo di richiesta non supportato.';
}
?>
