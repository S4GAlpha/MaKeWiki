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
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/home_page_style.css">
  <link rel="stylesheet" href="style/anime_game_style.css">
  <style>
    #main {
      background-image: url(images/img/wikiPage/home/imageHome.jpg);
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
      <div id="column-central" class="column-container" style="width: 60%; margin-left: 20%; text-align: center;">
      <div class="inner-column" style="padding: 0px;">
          <img src="images/img/wikiPage/pelati/basta.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: ;">
            <a id="nameAuth" style="margin-left: 0px;">Basta Jhon</a><br>
            <a id="descrizione" style="margin-left: 0px; font-size: 12px;">"Colui che disse basta"</a><br>
            <button class="button-post" style="width: 15%; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);">
                <div style="display: flex;">
                    <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
                    <a style="font-size: 14px;">counter like</a>
                </div>
            </button>
          </div>
        </div>
        <div class="inner-column" style="padding: 0px; margin-top: 5%;">
          <img src="images/img/wikiPage/pelati/bob.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: ; text-align: center;">
            <a id="nameAuth" style="margin-left: 0px;">Bob Tuttofaccio</a><br>
            <a id="descrizione" style="margin-left: 0px; font-size: 12px;">"Il troppo lavoro porta alle calvizie"</a><br>
            <button class="button-post" style="width: 15%; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);">
                <div style="display: flex;">
                    <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
                    <a style="font-size: 14px;">counter like</a>
                </div>
            </button>
          </div>
        </div>
        <div class="inner-column" style="padding: 0px; margin-top: 5%;">
          <img src="images/img/wikiPage/pelati/bene.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: ;">
            <a id="nameAuth" style="margin-left: 0px;">Bene Musetto</a><br>
            <a id="descrizione" style="margin-left: 0px; font-size: 12px;">"Beeeeeeeeenee maaaaaaanco maaaaaaaale"</a><br>
            <button class="button-post" style="width: 15%; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);">
                <div style="display: flex;">
                    <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
                    <a style="font-size: 14px;">counter like</a>
                </div>
            </button>
          </div>
        </div>
        <div class="inner-column" style="padding: 0px; margin-top: 5%;">
          <img src="images/img/wikiPage/pelati/bolognese.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: ;">
            <a id="nameAuth" style="margin-left: 0px;">Free Sudtirol</a><br>
            <a id="descrizione" style="margin-left: 0px; font-size: 12px;">"Bologna è sempre Italia?"</a><br>
            <button class="button-post" style="width: 15%; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);">
                <div style="display: flex;">
                    <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
                    <a style="font-size: 14px;">counter like</a>
                </div>
            </button>
          </div>
        </div>
        <div class="inner-column" style="padding: 0px; margin-top: 5%;">
          <img src="images/img/wikiPage/pelati/familia.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: ;">
            <a id="nameAuth" style="margin-left: 0px;">Win Benzina</a><br>
            <a id="descrizione" style="margin-left: 0px; font-size: 12px;">"Qualcuno ha detto FAMIGLIA???"</a><br>
            <button class="button-post" style="width: 15%; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);">
                <div style="display: flex;">
                    <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
                    <a style="font-size: 14px;">counter like</a>
                </div>
            </button>
          </div>
        </div>
        <div class="inner-column" style="padding: 0px; margin-top: 5%;">
          <img src="images/img/wikiPage/pelati/lindo.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: ;">
            <a id="nameAuth" style="margin-left: 0px;">Maestro Lando</a><br>
            <a id="descrizione" style="margin-left: 0px; font-size: 12px;">"Attento che cancella tutte le impurità"</a><br>
            <button class="button-post" style="width: 15%; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);">
                <div style="display: flex;">
                    <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
                    <a style="font-size: 14px;">counter like</a>
                </div>
            </button>
          </div>
        </div>
      <div class="inner-column" style="padding: 0px; margin-top: 5%;">
          <img src="images/img/wikiPage/pelati/lorenzo.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: ;">
            <a id="nameAuth" style="margin-left: 0px;">Lorenzo Bisio</a><br>
            <a id="descrizione" style="margin-left: 0px; font-size: 12px;">"Mi chiamo Lorenzo in realtà, l'ho nascosto pure ai miei genitori"</a><br>
            <button class="button-post" style="width: 15%; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);">
                <div style="display: flex;">
                    <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
                    <a style="font-size: 14px;">counter like</a>
                </div>
            </button>
          </div>
        </div>
        <div class="inner-column" style="padding: 0px; margin-top: 5%;">
          <img src="images/img/wikiPage/pelati/patrik.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: ;">
            <a id="nameAuth" style="margin-left: 0px;">Patrick la Stella</a><br>
            <a id="descrizione" style="margin-left: 0px; font-size: 12px;">"Navigo per le stella alla velocita delle spugne"</a><br>
            <button class="button-post" style="width: 15%; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);">
                <div style="display: flex;">
                    <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
                    <a style="font-size: 14px;">counter like</a>
                </div>
            </button>
          </div>
        </div>
        <div class="inner-column" style="padding: 0px; margin-top: 5%;">
          <img src="images/img/wikiPage/pelati/roccia.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: ;">
            <a id="nameAuth" style="margin-left: 0px;">Roccia Rocciosa</a><br>
            <a id="descrizione" style="margin-left: 0px; font-size: 12px;">"Più lucido di una roccia rasata"</a><br>
            <button class="button-post" style="width: 15%; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);">
                <div style="display: flex;">
                    <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
                    <a style="font-size: 14px;">counter like</a>
                </div>
            </button>
          </div>
        </div>
        <div class="inner-column" style="padding: 0px; margin-top: 5%;">
          <img src="images/img/wikiPage/pelati/pelati.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: ;">
            <a id="nameAuth" style="margin-left: 0px;">Mutti Pelati</a><br>
            <a id="descrizione" style="margin-left: 0px; font-size: 12px;">"Agro alimentari che soffrono di calvizie"</a><br>
            <button class="button-post" style="width: 15%; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);">
                <div style="display: flex;">
                    <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
                    <a style="font-size: 14px;">counter like</a>
                </div>
            </button>
          </div>
        </div>
        <div class="inner-column" style="padding: 0px; margin-top: 5%;">
          <img src="images/img/wikiPage/pelati/black.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: ;">
            <a id="nameAuth" style="margin-left: 0px;">Water White</a><br>
            <a id="descrizione" style="margin-left: 0px; font-size: 12px;">"Sempre verniciare di bianco il Water che un bianco con il Water"</a><br>
            <button class="button-post" style="width: 15%; background-color: rgba(79, 2, 151, 0); border: 1px solid rgba(79, 2, 151, 0);">
                <div style="display: flex;">
                    <img style="height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
                    <a style="font-size: 14px;">counter like</a>
                </div>
            </button>
          </div>
        </div>
    </div>
  </main>
</div>
</body>
</html>