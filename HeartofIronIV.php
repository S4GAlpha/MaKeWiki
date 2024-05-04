<?php
    session_start();
    // Assumiamo che l'utente sia autenticato e il nome utente sia disponibile nella sessione.
    if (isset($_SESSION['user_nome']) && isset($_SESSION['user_nick'])) {
        $nome = $_SESSION['user_nome'];
        $cognome = $_SESSION['user_cognome'];
        $nick = $_SESSION['user_nick'];
        $email = $_SESSION['user_email'];
        $isAdmin = $_SESSION['user_isadmin'];
    } else {
        $nome = "Ospite";  // Imposta un valore di default se l'utente non è loggato
        $cognome= "";
        $nick = "";
        $email = "unknown";
        $isAdmin = false;
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="game_style.css">
    <title id="title">Heart of Iron IV</title>
</head>
<body class="bg-hoi">
    <div class="container">
        <h1>Heart of Iron IV</h1>
        <div class="wiki-container">

            <div class="wiki-question">Beginner guide</div>
            <div class="wiki-answer">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/QvHT121_lWQ?si=U8lOVD23SOws7MUR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div class="wiki-question">Info of the game</div>
            <div class="wiki-answer">i sbirulini sono una raccolta di domande e risposte...</div>

            <div class="wiki-question">Division suggestion</div>
            <div class="wiki-answer">i sbirulini sono una raccolta di domande e risposte...</div>

            <div class="wiki-question">Forum</div>
            <div class="wiki-answer">
                <div id=Forum>
                    <button id="new-comment">+</button>
                    
                </div>
            </div>
        </div>

    </div>

    <div id="newCommentModal" class="modal">
        <div class="modal-content">
            <form action="" method="post">            
                <input type="hidden" id="user-row-id" name="ID" value=<?php echo $nick; ?>>
                <span class="close">&times;</span>
                <h2>Aggiungi nuovo commento</h2>
                <textarea name="commit" id="text-commento" cols="60" rows="20"></textarea>
                <!-- Pulsanti per confermare o annullare la cancellazione -->
                <button type="submit" id="confirm-commit">Conferma</button>
                <button type="button" id="cancel-commit">Annulla</button>
            </form>
        </div>
    </div>

    <script src="wikiSettings.js"></script>
</body>
</html>