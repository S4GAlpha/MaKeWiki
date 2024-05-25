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
        $cognome= "";
        $nick = "";
        $email = "unknown";
        $isAdmin = false;
        $wikiCount = 0; // Default value when not logged in
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "makewiki";

    // Crea la connessione
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la connessione
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    $sqlPages = "SELECT * FROM wikipages w
    INNER JOIN utenti u ON w.fk_id_utente = u.ID_utente
    INNER JOIN imm_wiki im ON w.ID_wiki = im.fk_id_wiki
    INNER JOIN immagini i ON im.fk_id_immagine = i.ID_immagine
    WHERE w.Tipologia='VideoGame'
    ORDER BY Data desc"; 
    $resultWikis = $conn->query($sqlPages);

    $wikis = [];
    if ($resultWikis->num_rows > 0) {
        while ($row = $resultWikis->fetch_assoc()) {
            $wikis[] = $row;
        }
    }

    $sqlFavoritePages = "SELECT w.*, COUNT(p.fk_ID_wiki) AS num_preferences
                     FROM preferenze p
                     JOIN wikipages w ON p.fk_ID_wiki = w.ID_wiki                     
                     WHERE w.Tipologia='VideoGame'
                     GROUP BY p.fk_ID_wiki
                     ORDER BY num_preferences DESC";

    $resultFavoriteWikis = $conn->query($sqlFavoritePages);

    // Memorizza i risultati in un array
    $favoriteWikis = [];
    if($resultFavoriteWikis->num_rows>0){
      while ($row = $resultFavoriteWikis->fetch_assoc()) {
        $favoriteWikis[] = $row;
      }
    }

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Game</title>
  <script src="adBlock.js"></script>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/anime_game_style.css">
  <style>
    #main {
      background-image: url(images/background/gameWallpaper.jpg);
      background-size: cover; /* Copre l'intera area disponibile */
      background-position: top center; /* Posiziona l'immagine in alto e al centro */
      background-repeat: no-repeat; /* Non ripetere l'immagine */
    }
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<!-- Navbar -->
<div>
<nav id="navbar" style="max-width: 190px; min-width: 80px; z-index: 10;">
    <ul class="navbar-items flexbox-col">
      <li class="navbar-logo flexbox-left" style="align-items: center; height: 80px;">
        <!--LOGO-->
        <img style="width: 80px; height: 80px;" src="images/img/OIG1.jpg" alt="Home Icon"/>
      </li>
      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left" href="home.php">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <!--HOME-->
            <img style="width: 20px; height: 20px;" src="images/navbar/home.png" alt="Home Icon" />
          </div>
          <span class="link-text" style="color: #ffff">Home</span>
        </a>
      </li>
      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left" href="fandom.php">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <!--NEWS-->
            <img style="width: 20px; height: 20px;" src="images/navbar/news.png" alt="Home Icon" />
          </div>
          <span class="link-text" style="color: #ffff">Fandom</span>
        </a>
      </li>
      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left" href="anime.php">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <!--ANIME-->
            <img style="width: 20px; height: 20px;" src="images/navbar/anime.png" alt="Home Icon" />
          </div>
          <span class="link-text" style="color: #ffff">Anime</span>
        </a>
      </li>
      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left" href="game.php">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <!--GAME-->
            <img style="width: 20px; height: 20px;" src="images/navbar/game.png" alt="Home Icon" />
          </div>
          <span class="link-text" style="color: #ffff">Game</span>
        </a>
      </li>
      <!-- Additional navbar items -->
      <?php if ($nick != "") : ?>
        <li class="navbar-item flexbox-left">
          <a class="navbar-item-inner flexbox-left" href="account.php">
            <div class="navbar-item-inner-icon-wrapper flexbox">
              <img style="width: 20px; height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
            </div>
            <span class="link-text" style="color: #ffff"><?php echo $nick; ?></span>
          </a>
        </li>
        <?php if($wikiCount > 0) : ?>
          <li class="navbar-item flexbox-left">
            <a class="navbar-item-inner flexbox-left" href="wiki.php">
              <div class="navbar-item-inner-icon-wrapper flexbox">
                <img style="width: 20px; height: 20px;" src="images/navbar/wiki.png" alt="Wiki Icon" />
              </div>
              <span class="link-text" style="color: #ffff">WIKI</span>
            </a>
          </li>
        <?php endif; ?>
        <li class="navbar-item flexbox-left">
          <a class="navbar-item-inner flexbox-left" href="new-wiki.php">
            <div class="navbar-item-inner-icon-wrapper flexbox">
              <img style="width: 20px; height: 20px;" src="images/navbar/new-wiki.png" alt="New Wiki Icon" />
            </div>
            <span class="link-text" style="color: #ffff">Crea WIKI</span>
          </a>
        </li>
      <?php else : ?>
        <li class="navbar-item flexbox-left">
          <a class="navbar-item-inner flexbox-left" href="account.php">
            <div class="navbar-item-inner-icon-wrapper flexbox">
              <img style="width: 20px; height: 20px;" src="images/navbar/users.png"  alt="Login Icon" />
            </div>
            <span class="link-text" style="color: #ffff">Ospite</span>
          </a>
        </li>
      <?php endif; ?>
    </ul>
  </nav>

   <!-- Main -->
   <main id="main" class="flexbox-col">
    <div id="row" style="display: flex;">
      <div id="column-suggested" class="column-container" style="width: 25%; margin-left: 0%; margin-top: 10%;">
        <?php if ($nick != "") : ?>
          <div class="inner-column" style="margin-top: 0%; text-align: center;">
            <div class="profile-icon"></div>
              <a class="welcome-message" style="font-size: 12px;"><?php echo $nick; ?></a><br>
              <a href="account.php" class="view-profile-button" style="font-size: 12px; color: white;"> Visualizza Account</a>
            </div>
            <div class="inner-column" style="padding: 0px; margin-top: 5%;">
          </div>
        <?php else : ?>
          <div class="inner-column" style="margin-top: 0%; text-align: center;">
            <div class="profile-icon"></div>
              <a class="welcome-message" style="font-size: 12px;">Effettua il login o signup</a>
              <a href="account.php" class="view-profile-button" style="font-size: 12px; color: white;">Pagina Accesso</a>
            </div>
            <div class="inner-column" style="padding: 0px; margin-top: 5%;">
          </div>
        <?php endif; ?>  

        <div class="inner-column" style="padding: 0px;">
        <img src="images/img/wikiPage/game/imageGame.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
        </div>
        <div class="inner-column" style="margin-top: 0%; border-top-left-radius: 0px; border-top-right-radius: 0px;">
          <h2>TOP GAME</h2>
          <ul>
            <!--
              <li>
                <a href="Elden Ring.php" style="color: #ffff;">Elden Ring Wiki</a>
              </li>
            -->
            <?php
              $numFavouriteWikis = count($favoriteWikis); // Ottieni il numero di elementi nell'array
              $limitF = min(6, $numFavouriteWikis); // Limita il ciclo alla lunghezza dell'array o a 6 elementi
              for ($i = 0; $i < $limitF; $i++) {
                $row = $favoriteWikis[$i];
                echo "
                <li>
                  <a href=\"". $row['pathWiki']."\" style=\"color: #ffff;\">".$row['Titolo']."</a>
                </li>";
              }
            ?>
          </ul>
        </div>
      </div>

      <div id="column-news" class="column-container" style="width: 60%; margin-left: 5%; margin-right: 6%;">
        <!--
          <div class="inner-column" style="padding: 0px;">
            <img src="images/gif/game.gif" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
            <div style="display: flex;">
              <a id="nameAuth">Nome Autore</a>
              <a id="date">Data caricaento</a>
            </div>
          </div>
        -->
        <?php
          foreach ($wikis as $row) {
            if($row['tipo'] == "Logo"){
                $pathLogo = $row['path'];
            }
            echo "
            <div class=\"inner-column\" style=\"padding: 0px;\">
              <img src=\"".$pathLogo."\" alt=\"\" class=\"centered-image\" style=\"border-top-left-radius: 10px; border-top-right-radius: 10px;\"/>
              <div style=\"display: flex;\">
                <a id=\"nameAuth\">".$row['Nick']."</a>
                <a id=\"date\">".$row['Data']."</a>
              </div>
            </div>";
          }
        ?>
      </div>
      <div id="column-all" class="column-container" style="width: 25%; margin-top: 4%;">
        <div class="inner-column" style="padding: 0px; margin-top: 0%;">
          <img src="images/img/adBlocker.png" alt="" class="centered-image" id="adblock-warning" style="border-radius: 10px; display: none;"/>
          <img src="images/img/logo.jpg" alt="" class="centered-image" id="ads" style="border-radius: 10px; display: none;"/>
        </div>
        <div>
          <!--
            <div class="inner-column" style="margin-top: 5%; padding: 0px;">
            <img src="images/gif/game.gif" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
            <a id="textList">Lista 1</a>
            </div>
          -->
          <?php
            shuffle($wikis);
            $numWikis = count($wikis); // Ottieni il numero di elementi nell'array
            $limit = min(10, $numWikis); // Limita il ciclo alla lunghezza dell'array o a 10 elementi

            for ($i = 0; $i < $limit; $i++) {
              $row = $wikis[$i]; // Usa il simbolo $ per la variabile $i
              if ($row['tipo'] == "Logo") {
                $pathLogo = $row['path'];
              }
              echo "
              <div class=\"inner-column\" style=\"margin-top: 5%; padding: 0px;\">
                <img src=\"".$pathLogo."\" alt='' class=\"centered-image\" style=\"border-top-left-radius: 10px; border-top-right-radius: 10px;\"/>
                <a id=\"textList\" style=\"color: #ffff;\" href=\"".$row['pathWiki']."\">".$row['Titolo']."</a>
              </div>";
            }
          ?>

        </div>
      </div>
    </div>
  </main>
</div>
<script src="scripts/getAccountImage.js"></script>
</body>
</html>
