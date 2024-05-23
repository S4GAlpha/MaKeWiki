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

    $sqlPages = "SELECT w.*, u.Nick, im.tipo, i.path
                  FROM wikipages w
                  INNER JOIN utenti u ON w.fk_id_utente = u.ID_utente
                  INNER JOIN imm_wiki im ON w.ID_wiki = im.fk_id_wiki
                  INNER JOIN immagini i ON im.fk_id_immagine = i.ID_immagine
                  WHERE w.Tipologia='Post'
                  ORDER BY w.Data DESC";

    $resultWikis = $conn->query($sqlPages);

    $wikis = [];
    if ($resultWikis->num_rows > 0) {
        while ($row = $resultWikis->fetch_assoc()) {
            $wikis[] = $row;
        }
    }

    $sqlFavoritePages = "SELECT w.*, u.Nick, im.tipo, i.path, COUNT(p.fk_ID_wiki) AS num_preferences
                          FROM preferenze p
                          INNER JOIN wikipages w ON p.fk_ID_wiki = w.ID_wiki
                          INNER JOIN utenti u ON w.fk_id_utente = u.ID_utente
                          INNER JOIN imm_wiki im ON w.ID_wiki = im.fk_id_wiki
                          INNER JOIN immagini i ON im.fk_id_immagine = i.ID_immagine
                          WHERE w.Tipologia='Post'
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
  <link rel="stylesheet" href="style/anime_game_style.css">
  <style>
    #main {
      background-image: url(images/background/fandomWallpaper.jpg);
      background-size: cover; /* Copre l'intera area disponibile */
      background-position: top center; /* Posiziona l'immagine in alto e al centro */
      background-repeat: no-repeat; /* Non ripetere l'immagine */
    }

    .button-post {
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
        <a class="navbar-item-inner flexbox-left">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <!--SEARCH-->
            <img style="width: 20px; height: 20px;" src="images/navbar/search.png" alt="Home Icon" />
          </div>
          <span class="link-text" style="color: #ffff">Search</span>
        </a>
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

        <?php if ($nick != "") : ?>
          <div class="inner-column" style="margin-top: 0%; text-align: center;">
            <button id="creaPost" style="display: ;" class="button-post" type="submit" onclick="salvaPost.style.display = 'block'; creaPost.style.display = 'none';  visualizzaCreaPost.style.display = 'block'; visualizzaPost.style.display = 'none';" class="forms_buttons-action"><img style="width: 20px; height: 20px;" src="images/navbar/new-wiki.png" alt="New Wiki Icon" /></button>
            <button id="salvaPost" style="display: none;"  class="button-post" type="submit" onclick="creaPost.style.display = 'block'; salvaPost.style.display = 'none'; visualizzaCreaPost.style.display = 'none'; visualizzaPost.style.display = 'block';" class="forms_buttons-action">Salva Post</button>
          </div>
          <div class="inner-column" style="margin-top: 5%; text-align: center;">
            <div class="profile-icon"></div>
              <a class="welcome-message" style="font-size: 12px;"><?php echo $nick; ?></a><br>
              <a href="account.php" class="view-profile-button" style="font-size: 12px; color: white;"> Visualizza Account</a>
            </div>
            <div class="inner-column" style="padding: 0px; margin-top: 5%;">
            <img src="images/img/wikiPage/fandom/imageFandom.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          </div>
        <?php else : ?>
          <div class="inner-column" style="margin-top: 0%; text-align: center;">
            <div class="profile-icon"></div>
              <a class="welcome-message" style="font-size: 12px;">Effettua il login o signup</a>
              <a href="account.php" class="view-profile-button" style="font-size: 12px; color: white;">Pagina Accesso</a>
            </div>
            <div class="inner-column" style="padding: 0px; margin-top: 5%;">
            <img src="images/img/wikiPage/fandom/imageFandom.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          </div>
        <?php endif; ?>
        
        <div class="inner-column" style="margin-top: 0%; border-top-left-radius: 0px; border-top-right-radius: 0px;">
          <h2>My Fandom</h2>
          <ul>
            <!--
              <li>
                <a href="pagina_anime.html">1 Fandom</a>
              </li>
            -->
            <?php
              foreach($favoriteWikis as $row) {
                if($row['Nick']==$nick){
                  echo "
                  <li>
                    <a href=\"". $row['pathWiki']."\" style=\"color: #ffff;\">".$row['Titolo']."</a>
                  </li>";
                }
              }
            ?>
          </ul>
        </div>
      </div>

      <div id="column-news" class="column-container" style="width: 60%; margin-left: 5%; margin-right: 6%;">

        <div id="visualizzaCreaPost" style="padding: 0px; display: none;"> 
          <div class="inner-column" style="padding: 0px;">
            <div style="display: flex;">
              <img style="width: 10%; height: 10%; margin-top: 10px; margin-left: 10px;" src="images/navbar/users.png" alt="Account Icon" />
              <div>
                <ul>
                  <li>
                    <a style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="true">
                      Inserisci qui la tipologia
                    </a>
                  </li>
                </ul>
                <div style="margin-left: 10px;">
                  <a style="font-size: 8px;"><?php echo $nick; ?></a>
                  <a style="font-size: 8px;">ora</a>
                </div>
              </div>
            </div>
            <ul>
              <li>
                <a style="font-size: 16px; margin-left: 10px; display: block; width: 100%; border: none;" contenteditable="true">
                  Inserisci qui la descrizione del post
                </a>
              </li>
            </ul>

            <div class="inner-column" style="padding: 0px; margin-top: 5%; border-bot-left-radius: 0px; border-bot-right-radius: 0px;">
              <img src="images/navbar/new-wiki.png" class="customButton centered-image" data-index="1" alt="" style="width: 20%; height: 100%;"/>
              <form class="uploadForm" enctype="multipart/form-data" style="display: none;">
                  <input type="file" class="fileInput" data-index="1" accept="image/*">
              </form>
              <div class="imageContainer" data-index="1" style="border-top-left-radius: 10px; border-top-right-radius: 10px; border-bot-left-radius: 0px; border-bot-right-radius: 0px;"></div>
            </div>

            <div style="display: none; margin-top: 10px; height: 40px;">
                  <button class="button-post" style="width: 40%; margin-left: 10px; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);">
                    <div style="display: flex;">
                      <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
                      <a style="font-size: 14px;">counter like</a>
                    </div>
                  </button>
                  <button class="button-post" style="width: 40%; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);" onclick="visualizzaMessaggi.style.display = 'block';">
                    <div style="display: flex; margin-left: 20px;">
                      <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
                      <a style="font-size: 14px;">counter messaggi</a>
                    </div>
                  </button>
                </div>
                  <div id="visualizzaMessaggii" style="height: 425px; display: none;">
                    <div style="display:flex; text-align: center; justify-content: center;">
                      <button id="creaMessaggioo" class="button-post" style="color: #ffff; width: 40%; height: 50px; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0); display: none;" onclick="aggiungiMessaggio.style.display = 'none'; salvaMessaggio.style.display = 'block'; salvaMessaggio.style.display = 'block'; creaMessaggio.style.display = 'none';">Salva Messaggio</button>
                      <button id="salvaMessaggioo" class="button-post" style="color: #ffff; width: 40%; height: 50px; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);" onclick="aggiungiMessaggio.style.display = 'block'; salvaMessaggio.style.display = 'none'; salvaMessaggio.style.display = 'none'; creaMessaggio.style.display = 'block';">Aggiungi Messaggio</button>
                      <button class="button-post" style="color: #ffff; width: 40%; height: 50px; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);" onclick="visualizzaMessaggi.style.display = 'none';">Chiudi Messaggi</button>
                    </div>
                    <div id="aggiungiMessaggioo" style="display: none;">
                      <div style="display: flex;">
                        <img style="width: 10%; height: 10%; margin-top: 10px; margin-left: 10px;" src="images/navbar/users.png" alt="Account Icon" />
                        <div>
                          <div style="margin-left: 10px;">
                            <a style="font-size: 8px;"><?php echo $nick; ?></a>
                            <a style="font-size: 8px;">ora</a>
                          </div>
                          <div style="width: 60%;">
                            <a style="font-size: 12px; display: block; width: 100%; border: none; margin-left: 10px; box-sizing: border-box;" contenteditable="true">
                              Inserisci il messaggio
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="messaggii" style="display: flex; margin-top: 10px; height: 300px; overflow-y: auto;">
                      <img style="width: 10%; height: 25%; margin-top: 10px; margin-left: 10px;" src="images/navbar/users.png" alt="Account Icon" />
                      <div>
                        <div style="margin-left: 10px;">
                          <a style="font-size: 8px;">author</a>
                          <a style="font-size: 8px;">time ago</a>
                        </div>
                        <a style="font-size: 16px; margin-left: 10px;">messaggio</a>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
        <!--
        <div class="inner-column" style="padding: 0px;">
          <div style="display: flex;">
            <img style="width: 10%; height: 10%; margin-top: 10px; margin-left: 10px;" src="images/navbar/users.png" alt="Account Icon" />
            <div>
              <a style="font-size: 12px; margin-left: 10px;">typology</a>
              <div style="margin-left: 10px;">
                <a style="font-size: 8px;">author</a>
                <a style="font-size: 8px;">time ago</a>
              </div>
            </div>
          </div>
          <a style="font-size: 16px; margin-left: 10px;">descrizione post</a>
          <img src="images/gif/sus.gif" alt="" class="centered-image" />
          <div style="display: flex; height: 30px;">
            <div style="display: flex;">
              <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
              <a style="font-size: 14px;">counter like</a>
            </div>
            <div style="display: flex; margin-left: 20px;">
              <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
              <a style="font-size: 14px;">counter messaggi</a>
            </div>
          </div>
        </div>
        -->
            <div id="visualizzaPost">
            <div class="inner-column" style="padding: 0px; max-height: 2000px;">
                <div style="display: flex;">
                  <img style="width: 10%; height: 10%; margin-top: 10px; margin-left: 10px;" src="images/navbar/users.png" alt="Account Icon" />
                  <div>
                    <a style="font-size: 12px; margin-left: 10px;">typology</a>
                    <div style="margin-left: 10px;">
                      <a style="font-size: 8px;">author</a>
                      <a style="font-size: 8px;">time ago</a>
                    </div>
                  </div>
                </div>
                <a style="font-size: 16px; margin-left: 10px;">descrizione post</a>
                <img src="images/gif/sus.gif" alt="" class="centered-image" />
                <div style="display: flex; margin-top: 10px; height: 40px;">
                  <button class="button-post" style="width: 40%; margin-left: 10px; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);">
                    <div style="display: flex;">
                      <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
                      <a style="font-size: 14px;">counter like</a>
                    </div>
                  </button>
                  <button class="button-post" style="width: 40%; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);" onclick="visualizzaMessaggi.style.display = 'block';">
                    <div style="display: flex; margin-left: 20px;">
                      <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
                      <a style="font-size: 14px;">counter messaggi</a>
                    </div>
                  </button>
                </div>
                  <div id="visualizzaMessaggi" style="height: 425px; display: none;">
                    <div style="display:flex; text-align: center; justify-content: center;">
                      <button id="creaMessaggio" class="button-post" style="color: #ffff; width: 40%; height: 50px; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0); display: none;" onclick="aggiungiMessaggio.style.display = 'none'; salvaMessaggio.style.display = 'block'; salvaMessaggio.style.display = 'block'; creaMessaggio.style.display = 'none';">Salva Messaggio</button>
                      <button id="salvaMessaggio" class="button-post" style="color: #ffff; width: 40%; height: 50px; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);" onclick="aggiungiMessaggio.style.display = 'block'; salvaMessaggio.style.display = 'none'; salvaMessaggio.style.display = 'none'; creaMessaggio.style.display = 'block';">Aggiungi Messaggio</button>
                      <button class="button-post" style="color: #ffff; width: 40%; height: 50px; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);" onclick="visualizzaMessaggi.style.display = 'none';">Chiudi Messaggi</button>
                    </div>
                    <div id="aggiungiMessaggio" style="display: none;">
                      <div style="display: flex;">
                        <img style="width: 10%; height: 10%; margin-top: 10px; margin-left: 10px;" src="images/navbar/users.png" alt="Account Icon" />
                        <div>
                          <div style="margin-left: 10px;">
                            <a style="font-size: 8px;"><?php echo $nick; ?></a>
                            <a style="font-size: 8px;">ora</a>
                          </div>
                          <div style="width: 60%;">
                            <a style="font-size: 12px; display: block; width: 100%; border: none; margin-left: 10px; box-sizing: border-box;" contenteditable="true">
                              Inserisci il messaggio
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="messaggi" style="display: flex; margin-top: 10px; height: 300px; overflow-y: auto;">
                      <img style="width: 10%; height: 25%; margin-top: 10px; margin-left: 10px;" src="images/navbar/users.png" alt="Account Icon" />
                      <div>
                        <div style="margin-left: 10px;">
                          <a style="font-size: 8px;">author</a>
                          <a style="font-size: 8px;">time ago</a>
                        </div>
                        <a style="font-size: 16px; margin-left: 10px;">messaggio</a>
                      </div>
                    </div>
                  </div>
              </div>
              <div id="row" style="display: flex; text-align: center; margin-top: 0%; widht: 100%; background-color: rgba(79, 2, 151, 0);">
          </div>
          <?php
            foreach ($wikis as $row) {
              if($row['tipo'] == "Logo"){
                  $pathLogo = $row['path'];
              }
              echo "
              <div class=\"inner-column\" style=\"padding: 0px;\">
                <div style=\"display: flex;\">
                  <img style=\"width: 10%; height: 10%; margin-top: 10px; margin-left: 10px;\" src=\"images/navbar/users.png\" alt=\"Account Icon\" />
                  <div>
                    <a style=\"font-size: 12px; margin-left: 10px;\">typology</a>
                    <div style=\"margin-left: 10px;\">
                      <a style=\"font-size: 8px;\">".$row['Nick']."</a>
                      <a style=\"font-size: 8px;\">".$row['Data']."</a>
                    </div>
                  </div>
                </div>
                <a style=\"font-size: 16px; margin-left: 10px;\">".$row['Descrizione']."</a>
                <img src=\"".$pathLogo."\" alt=\"\" class=\"centered-image\" />
                <div style=\"display: flex; height: 30px;\">
                  <div style=\"display: flex;\">
                    <img style=\"height: 20px;\" src=\"images/navbar/users.png\" alt=\"Account Icon\" />
                    <a style=\"font-size: 14px;\">counter like</a>
                  </div>
                  <div style=\"display: flex; margin-left: 20px;\">
                    <img style=\"height: 20px;\" src=\"images/navbar/users.png\" alt=\"Account Icon\" />
                    <a style=\"font-size: 14px;\">counter messaggi</a>
                  </div>
                </div>
              </div>";
            }
          ?>
        </div>
      </div>

      <div id="column-all" class="column-container" style="width: 25%; margin-top: 0%;">
        <div>
          <div class="inner-column" style="margin-top: 0%; padding: 0px; height: 430px;">
            <div style="height: 350px; overflow-y: auto;">
              <a id="textList" style="margin-left: 5px;">Fandom Consigliati</a>
              <div>
                <!--
                <div style="display: flex;">
                  <img style="height: 50px;" src="images/navbar/users.png" alt="Account Icon" />
                  <div style="margin-left: 20px;">
                    <a style="font-size: 12px;">nomeFandom</a>
                    <div style="padding: 0px;">
                      <a style="font-size: 8px;">counter like</a>
                    </div>
                  </div>
                  <img style="height: 50px; margin-left: 40px;" src="images/navbar/users.png" alt="Account Icon" />
                </div>
                -->
                <?php
                  $numFavouriteWikis = count($favoriteWikis); // Ottieni il numero di elementi nell'array
                  $limitF = min(6, $numFavouriteWikis); // Limita il ciclo alla lunghezza dell'array o a 6 elementi
                  for ($i = 0; $i < $limitF; $i++) {
                    $row = $favoriteWikis[$i];
                    if($row['tipo'] == "Logo"){
                      $pathLogo = $row['path'];
                    }
                    echo "
                    <div style=\"display: flex;\">
                      <img style=\"height: 50px;\" src=\"".$pathLogo."\" alt=\"Account Icon\"/>
                      <div style=\"margin-left: 20px;\">
                        <a style=\"font-size: 12px;\">".$row['Titolo']."</a>
                        <div style=\"padding: 0px;\">
                          <a style=\"font-size: 8px;\">counter like</a>
                        </div>
                      </div>
                    </div>";
                  }
                ?>
              </div>
            </div>
            <div style="text-align: center;">
              <li class="navbar-item flexbox-left">
                <a class="navbar-item-inner flexbox-left">
                  <div class="navbar-item-inner-icon-wrapper flexbox">
                    <!--SEARCH-->
                    <img style="width: 20px; height: 20px;" src="images/navbar/search.png" alt="Home Icon" />
                  </div>
                  <span class="link-text">Search</span>
                </a>
              </li>
            </div>
          </div>
          <div class="inner-column" style="margin-top: 5%; padding: 0px; height: 430px;">
            <div style="height: 350px; overflow-y: auto;">
              <a id="textList" style="margin-left: 5px;">Fandom Nuovi</a>
              <div>
                <!--
                <div style="display: flex;">
                  <img style="height: 50px;" src="images/navbar/users.png" alt="Account Icon" />
                  <div style="margin-left: 20px;">
                    <a style="font-size: 12px;">nomeFandom</a>
                    <div style="padding: 0px;">
                      <a style="font-size: 8px;">counter like</a>
                    </div>
                  </div>
                  <img style="height: 50px; margin-left: 40px;" src="images/navbar/users.png" alt="Account Icon" />
                </div>
                -->
                <?php
                  $numWikis = count($wikis); // Ottieni il numero di elementi nell'array
                  $limit = min(10, $numWikis); // Limita il ciclo alla lunghezza dell'array o a 10 elementi

                  for ($i = 0; $i < $limit; $i++) {
                    if($row['tipo'] == "Logo"){
                        $pathLogo = $row['path'];
                    }
                    echo "
                    <div style=\"display: flex;\">
                      <img style=\"height: 50px;\" src=\"".$pathLogo."\" alt=\"Account Icon\" />
                      <div style=\"margin-left: 20px;\">
                        <a style=\"font-size: 12px;\">".$row['Titolo']."</a>
                        <div style=\"padding: 0px;\">
                          <a style=\"font-size: 8px;\">counter like</a>
                        </div>
                      </div>
                    </div>";
                  }
                ?>
              </div>
            </div>
            <div style="text-align: center;">
              <li class="navbar-item flexbox-left">
                <a class="navbar-item-inner flexbox-left">
                  <div class="navbar-item-inner-icon-wrapper flexbox">
                    <!--SEARCH-->
                    <img style="width: 20px; height: 20px;" src="images/navbar/search.png" alt="Home Icon" />
                  </div>
                  <span class="link-text">Search</span>
                </a>
              </li>
            </div>
          </div>
          <div class="inner-column" style="padding: 0px; margin-top: 0%;">
            <img src="images/img/adBlocker.png" alt="" class="centered-image" id="adblock-warning" style="border-radius: 10px; display: none;"/>
            <img src="images/img/logo.jpg" alt="" class="centered-image" id="ads" style="border-radius: 10px; display: none;"/>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="addImm.js"></script>
</body>
</html>