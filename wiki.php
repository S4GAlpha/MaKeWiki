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

    $sqlPages = "SELECT
                  wp.ID_wiki,
                  wp.Titolo,
                  wp.Descrizione,
                  wp.Tipologia,
                  wp.pathWiki,
                  wp.Data,
                  imm.path AS LogoPath,
                  (SELECT COUNT(*) FROM messaggi m WHERE m.FK_ID_wiki = wp.ID_wiki) AS CounterMessaggi,
                  (SELECT COUNT(*) FROM preferenze p WHERE p.fk_ID_wiki = wp.ID_wiki) AS CounterLike
                  FROM wikipages wp
                  LEFT JOIN imm_wiki iw ON wp.ID_wiki = iw.fk_id_wiki AND iw.tipo = 'Logo'
                  LEFT JOIN immagini imm ON iw.fk_id_immagine = imm.ID_immagine
                  INNER JOIN utenti u ON wp.fk_id_utente = u.ID_utente  
                  WHERE u.email='$email'"; 
    $resultWikis = $conn->query($sqlPages);

    $wikis = [];
    if ($resultWikis->num_rows > 0) {
        while ($row = $resultWikis->fetch_assoc()) {
            $wikis[] = $row;
        }
    }
    
    $sqlFavoritePages = "SELECT w.*, COUNT(p.fk_ID_wiki) AS num_preferences
                     FROM preferenze p
                     INNER JOIN wikipages w ON p.fk_ID_wiki = w.ID_wiki
                     INNER JOIN utenti u ON w.fk_id_utente = u.ID_utente                     
                     WHERE u.email='$email'
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
  <title>Fandom</title>
  <script src="adBlock.js"></script>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/user_style.css">
  <link rel="stylesheet" href="style/anime_game_style.css">
  <style>
    #main {
      background-image: url(images/background/wikiWallpaper.jpg);
      background-size: cover; /* Copre l'intera area disponibile */
      background-position: top center; /* Posiziona l'immagine in alto e al centro */
      background-repeat: no-repeat; /* Non ripetere l'immagine */
    }

    #button-acc-profile,
    #button-acc-profile2 {
      display: block;
      width: 100%;
      background-color: rgba(79, 2, 151, 0.5);
      border: 1px solid rgba(79, 2, 151, 0.5);
      border-radius: 5px;
      padding: 8px 0;
      font-size: 1rem;
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 0.05rem;
      margin-bottom: 10px;
      color: #ffff;
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
      <div id="column-suggested" class="column-container" style="width: 25%; margin-left: 0%; margin-top: 0%;">
        <div class="inner-column" style="padding: 0px; margin-top: 0%;">
            <img src="images/img/adBlocker.png" alt="" class="centered-image" id="adblock-warning" style="border-radius: 10px; display: none;"/>
            <img src="images/img/logo.jpg" alt="" class="centered-image" id="ads" style="border-radius: 10px; display: none;"/>
        </div>
        <?php if ($nick != "") : ?>
          <div class="inner-column" style="margin-top: 5%; text-align: center;">
            <div class="profile-icon"></div>
              <a class="welcome-message" style="font-size: 12px;"><?php echo $nick; ?></a><br>
              <a href="account.php" class="view-profile-button" style="font-size: 12px; color: white;"> Visualizza Account</a>
            </div>
            <div class="inner-column" style="padding: 0px; margin-top: 5%;">
            <img src="images/img/wikiPage/fandom/imageFandom.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          </div>
        <?php else : ?>
          <div class="inner-column" style="margin-top: 5%; text-align: center;">
            <div class="profile-icon" style="margin-top: 5%;"></div>
              <a class="welcome-message" style="font-size: 12px;">Effettua il login o signup</a>
              <a href="account.php" class="view-profile-button" style="font-size: 12px; color: white;">Pagina Accesso</a>
            </div>
            <div class="inner-column" style="padding: 0px; margin-top: 5%;">
            <img src="images/img/wikiPage/wiki/imageWiki.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          </div>
        <?php endif; ?>
        
        <div class="inner-column" style="margin-top: 0%; border-top-left-radius: 0px; border-top-right-radius: 0px;">
          <h2>Top WIKI</h2> <!-- Le wiki che sono con più like create dall'utente -->
          <ul>
            <?php
              foreach ($favoriteWikis as $row) {
                echo "
                <li>
                  <a href=\"". $row['pathWiki']."\" style=\"color: #ffff;\">".$row['Titolo']."</a>
                </li>";
              }
            ?>
          </ul>
        </div>
      </div>

      <div id="column-news" class="column-container" style="width: 85%; margin-left: 5%; margin-right: 6%;">
        <!--
          <div class="inner-column" style="padding: 10px;">
            <div style="display: flex;">
              <div style="width: 25%;">
                  <img style="width: 100%; height: 100%; padding: 10px; margin-top: 0px; margin-left: 0px;" src="images/gif/sus.gif" alt="" class="centered-image" />
              </div>
              <div style="width: 50%;">
                <a style="font-size: 12px; margin-left: 10px;">typology</a>
                <div style="margin-left: 10px;">
                  <a style="font-size: 8px;">time ago</a>
                </div>
                <div style="display: flex; height: 30px; margin-left: 10px;  margin-top: 10px;">
                  <div style="display: flex;">
                      <img style="height: 20px;" src="images/navbar/users.png" alt="" />
                      <a style="font-size: 14px;">counter like</a>
                  </div>
                  <div style="display: flex; margin-left: 20px;">
                      <img style="height: 20px;" src="images/navbar/users.png" alt="" />
                      <a style="font-size: 14px;">counter messaggi</a>
                  </div>
                </div>
                <a style="font-size: 16px; margin-left: 10px;">descrizione wiki</a>
                  <div style="display: flex; height: 30px;">
                  </div>
              </div>
              <div style="width: 25%; margin-top: 7%;">
                  <form class="forms_form" action="back-account/nomeWiki.php" method="post">
                    <div class="forms_buttons">
                      <input id="button-acc-profile" type="submit" value="Modifica" class="forms_buttons-action">
                    </div>
                  </form>
                  <form class="forms_form" action="back-account/elimina.php" method="post">
                    <div class="forms_buttons">
                      <input id="button-acc-profile" type="submit" value="Cancella" class="forms_buttons-action">
                    </div>
                  </form>
              </div>
            </div>
          </div>
        -->
        <?php
          foreach($wikis as $row){
            echo '<div class="inner-column" style="padding: 10px;">
                    <div style="display: flex;">
                        <div style="width: 25%;">
                            <img style="width: 100%; height: 100%; padding: 10px; margin-top: 0px; margin-left: 0px;" src="' . htmlspecialchars($row["LogoPath"]) . '" alt="" class="centered-image" />
                        </div>
                        <div style="width: 50%;">
                          <a style="font-size: 12px; margin-left: 10px;">' . htmlspecialchars($row["Titolo"]) . '</a>
                            <a style="font-size: 12px; margin-left: 10px;">' . htmlspecialchars($row["Tipologia"]) . '</a>
                            <div style="margin-left: 10px;">
                                <a style="font-size: 8px;">' . htmlspecialchars($row["Data"]) . '</a>
                            </div>
                            <div style="display: flex; height: 30px; margin-left: 10px; margin-top: 10px;">
                                <div style="display: flex;">
                                    <img style="height: 20px;" src="images/navbar/users.png" alt="" />
                                    <a style="font-size: 14px;">' . htmlspecialchars($row["CounterLike"]) . '</a>
                                </div>
                                <div style="display: flex; margin-left: 20px;">
                                    <img style="height: 20px;" src="images/navbar/users.png" alt="" />
                                    <a style="font-size: 14px;">' . htmlspecialchars($row["CounterMessaggi"]) . '</a>
                                </div>
                            </div>
                            <a style="font-size: 16px; margin-left: 10px;">' . htmlspecialchars($row["Descrizione"]) . '</a>
                            <div style="display: flex; height: 30px;">
                            </div>
                        </div>
                        <div style="width: 25%; margin-top: 7%;">
                            <form class="forms_form" action="'.htmlspecialchars($row["pathWiki"]).'" method="get">
                                <div class="forms_buttons">
                                    <input id="button-acc-profile" type="submit" value="Modifica" class="forms_buttons-action">
                                </div>
                            </form>
                            <form class="forms_form" action="eliminaWiki.php" method="post">
                                <div class="forms_buttons">
                                    <input type="hidden" name="ID_wiki" value="' . htmlspecialchars($row["ID_wiki"]) . '">
                                    <input id="button-acc-profile" type="submit" value="Cancella" class="forms_buttons-action">
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>';
          }
        ?>
      </div>
    </div>
  </main>
  <script src="scripts/getAccountImage.js"></script>
</body>
</html>