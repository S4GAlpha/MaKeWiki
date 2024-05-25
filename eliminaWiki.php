<?php
session_start();

// Controlla se l'ID della wiki è stato inviato tramite POST
if (isset($_POST['ID_wiki'])) {
    // Recupera l'ID della wiki dal POST
    $ID_wiki = $_POST['ID_wiki'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "makewiki";

    // Crea la connessione
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    // Query per eliminare le immagini associate alla wiki dal database
    $sql_delete_images = "DELETE FROM imm_wiki WHERE fk_id_wiki = ?";
    $stmt_delete_images = $conn->prepare($sql_delete_images);
    $stmt_delete_images->bind_param("i", $ID_wiki);

    // Esegui la query per eliminare le immagini associate alla wiki
    $stmt_delete_images->execute();

    // Query per eliminare i messaggi associati alla wiki dal database
    $sql_delete_messages = "DELETE FROM messaggi WHERE FK_ID_wiki = ?";
    $stmt_delete_messages = $conn->prepare($sql_delete_messages);
    $stmt_delete_messages->bind_param("i", $ID_wiki);

    // Esegui la query per eliminare i messaggi associati alla wiki
    $stmt_delete_messages->execute();

    // Query per eliminare le preferenze associate alla wiki dal database
    $sql_delete_preferences = "DELETE FROM preferenze WHERE fk_ID_wiki = ?";
    $stmt_delete_preferences = $conn->prepare($sql_delete_preferences);
    $stmt_delete_preferences->bind_param("i", $ID_wiki);

    // Esegui la query per eliminare le preferenze associate alla wiki
    $stmt_delete_preferences->execute();

    // Query per recuperare il percorso del file della wiki dal database
    $sql_select_wiki_file_path = "SELECT pathWiki FROM wikipages WHERE ID_wiki = ?";
    $stmt_select_wiki_file_path = $conn->prepare($sql_select_wiki_file_path);
    $stmt_select_wiki_file_path->bind_param("i", $ID_wiki);
    $stmt_select_wiki_file_path->execute();
    $result_wiki_file_path = $stmt_select_wiki_file_path->get_result();

    // Recupera il percorso del file della wiki
    $row_wiki_file_path = $result_wiki_file_path->fetch_assoc();
    $wiki_file_path = $row_wiki_file_path['pathWiki'];

    $stmt_select_wiki_file_path->close();

    // Query per eliminare la wiki dal database
    $sql_delete_wiki = "DELETE FROM wikipages WHERE ID_wiki = ?";
    $stmt_delete_wiki = $conn->prepare($sql_delete_wiki);
    $stmt_delete_wiki->bind_param("i", $ID_wiki);

    // Esegui la query per eliminare la wiki
    if ($stmt_delete_wiki->execute()) {
        // Elimina il file della wiki dal server
        $wiki_file_deleted = unlink($wiki_file_path);

        if ($wiki_file_deleted) {
            echo "Wiki e file associato eliminati con successo.";
        } else {
            echo "Errore durante l'eliminazione del file della wiki dal server.";
        }
    } else {
        echo "Errore durante l'eliminazione della wiki dal database.";
    }

    // Chiudi le connessioni e gli statement
    $stmt_delete_images->close();
    $stmt_delete_messages->close();
    $stmt_delete_preferences->close();
    $stmt_delete_wiki->close();
    $conn->close();
    header("Location: home.php"); 
} else {
    echo "ID della wiki non specificato.";
}
?>
