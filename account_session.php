<?php
session_start();

// Assumiamo che l'utente sia autenticato e il nome utente sia disponibile nella sessione.
if (isset($_SESSION['user_nome']) && isset($_SESSION['user_nick'])) {
    $nome = $_SESSION['user_nome'];
    $cognome = $_SESSION['user_cognome'];
    $nick = $_SESSION['user_nick'];
    $email = $_SESSION['user_email'];
    $isAdmin = $_SESSION['user_isadmin'];
    $wikiCount = isset($_SESSION['user_wikiCount']) ? $_SESSION['user_wikiCount'] : 0;
} else {
    $nome = "Ospite";  // Imposta un valore di default se l'utente non è loggato
    $cognome = "";
    $nick = "";
    $email = "unknown";
    $isAdmin = false;
    $wikiCount = 0; // Default value when not logged in
}

// Restituisci i valori come JSON
echo json_encode(array(
    'nome' => $nome,
    'cognome' => $cognome,
    'nick' => $nick,
    'email' => $email,
    'isAdmin' => $isAdmin,
    'wikiCount' => $wikiCount
));
?>
