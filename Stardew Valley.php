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
    <title id="title">Stardew Valley</title>
    <script src="adBlock.js"></script>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/anime_game_style.css">
    <style>
        #main {
            background-image: url(images/HOI4/HOI4Wallpaper.jpg);
            background-size: cover; /* Copre l'intera area disponibile */
            background-position: top center; /* Posiziona l'immagine in alto e al centro */
            background-repeat: no-repeat; /* Non ripetere l'immagine */
        }

        #row {
            display: flex;
            background-color: rgba(0, 0, 0, 0.897); /* Colore di sfondo nero con trasparenza */
            padding: 20px;
            margin-top: 20%;
            width: 100%;
        }

        #column-all {
            transition: height 0.5s ease; /* Aggiungi una transizione per un effetto di animazione fluida */
            overflow: hidden; /* Assicurati che il contenuto eccedente non fuoriesca quando la colonna viene ridotta di dimensioni */
        }

    </style>
</head>

<body>

<div>
  <nav id="navbar" style="max-width: 190px;">
    <ul class="navbar-items flexbox-col">
      <li class="navbar-logo flexbox-left" style="align-items: center;">
        <!--LOGO-->
        <img style="width: 80px; height: 80px;" src="images/img/OIG1.jpg" alt="Home Icon" />
      </li>
      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <!--SEARCH-->
            <img style="width: 20px; height: 20px;" src="images/navbar/search.png" alt="Home Icon" />
          </div>
          <span class="link-text">Search</span>
        </a>
      </li>
      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left" href="home.php">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <!--HOME-->
            <img style="width: 20px; height: 20px;" src="images/navbar/home.png" alt="Home Icon" />
          </div>
          <span class="link-text">Home</span>
        </a>
      </li>
      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left" href="fandom.php">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <!--NEWS-->
            <img style="width: 20px; height: 20px;" src="images/navbar/news.png" alt="Home Icon" />
          </div>
          <span class="link-text">Fandom</span>
        </a>
      </li>
      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left" href="anime.php">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <!--ANIME-->
            <img style="width: 20px; height: 20px;" src="images/navbar/anime.png" alt="Home Icon" />
          </div>
          <span class="link-text">Anime</span>
        </a>
      </li>
      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left" href="game.php">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <!--GAME-->
            <img style="width: 20px; height: 20px;" src="images/navbar/game.png" alt="Home Icon" />
          </div>
          <span class="link-text">Game</span>
        </a>
      </li>
      <li class="navbar-item flexbox-left account">
        <a class="navbar-item-inner flexbox-left" href="account.php">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <!--ACCOUNT-->
            <img style="width: 20px; height: 20px;" src="images/navbar/users.png" alt="Account Icon" />
          </div>
          <span class="link-text">Account</span>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Main -->
    <main id="main" class="flexbox-col">
        <div id="row" style="display: flex; text-align: center; margin-top: 0%;">
            <img style="width: 200px; height: 100px; margin-left: 35%;" src="images/img/wikiPage/hoi4/Hoi4-logo.jpg" alt="Account Icon"/>
            <div>
                <h2 style="margin-left: 30px;">Stardew Valley</h2>
                <a style="font-size: 12px;">Eric Barone</a>
            </div>
        </div>  
        <div id="row" style="display: flex; margin-top: 10%;">
            <div id="column-suggested" class="column-container" style="width: 25%; margin-left: 10%; margin-top: 0%;">
                <div class="inner-column" style="padding: 0px; margin-top: 0%;">
                    <img src="images/img/adBlocker.png" alt="" class="centered-image" id="adblock-warning" style="border-radius: 10px; display: none;"/>
                    <img src="images/img/logo.jpg" alt="" class="centered-image" id="ads" style="border-radius: 10px; display: none;"/>
                </div>
                <div class="inner-column" style="padding: 0px;  margin-top: 5%;">
                    <img src="images/img/wikiPage/hoi4/imageHOI4.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
                </div>
                <div class="inner-column" style="margin-top: 0%; border-top-left-radius: 0px; border-top-right-radius: 0px;">
                    <h2>Info Game</h2>
                    <ul>
                        <li>
                            <a style="font-size: 12px;">Stardew Valley è un videogioco indipendente sviluppato da ConcernedApe e pubblicato nel 2016 da Chucklefish per Microsoft Windows. Convertito per macOS e Linux, il gioco è stato successivamente distribuito per PlayStation 4, Xbox One, PlayStation Vita, iOS e Android. Nonostante fosse prevista una versione per Wii U, lo sviluppo del gioco è stato bloccato in favore della conversione per Nintendo Switch.[1] Il videogioco è ispirato alla serie Harvest Moon, in particolare Harvest Moon 64.[2][3] Yasuhiro Wada, creatore della saga originale, ha incontrato lo sviluppatore Eric Barone per esprimere la sua soddisfazione.</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="column-news" class="column-container" style="width: 55%; margin-left: 5%; margin-right: 6%; text-align: center;">
                <div class="inner-column" style="margin-top: 0%; padding: 10px; text-align: center;">
                    <a id="collapseDivision" onclick="toggleDivision()">Tactics Suggestion</a>
                    <a id="collapseTactic" onclick="toggleTactics()" style="display: none;">Division Suggestion</a>
                </div>
                <div id="division">
                    <div class="inner-column" style="padding: 0px; text-align: center; margin-top: 5%;">
                        <img src="images/img/wikiPage/hoi4/hoi4-division.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
                        <div>
                            <a>1 Division</a><br>
                        </div>
                    </div>
                    <div class="inner-column" style="margin-top: 5%; padding: 0px; text-align: center;">
                        <img src="images/img/wikiPage/hoi4/hoi4-division.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
                        <div>
                            <a>1 Division</a><br>
                        </div>
                    </div>
                    <div class="inner-column" style="margin-top: 5%; padding: 0px; text-align: center;">
                        <img src="images/img/wikiPage/hoi4/hoi4-division.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
                        <div>
                            <a>1 Division</a><br>
                        </div>
                    </div>
                    <div class="inner-column" style="margin-top: 5%; padding: 0px; text-align: center;">
                        <img src="images/img/wikiPage/hoi4/hoi4-division.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
                        <div>
                            <a>1 Division</a><br>
                        </div>
                    </div>
                    <div class="inner-column" style="margin-top: 5%; padding: 0px; text-align: center;">
                        <img src="images/img/wikiPage/hoi4/hoi4-division.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
                        <div>
                            <a>1 Division</a><br>
                        </div>
                    </div>
                    <div class="inner-column" style="margin-top: 5%; padding: 0px; text-align: center;">
                        <img src="images/img/wikiPage/hoi4/hoi4-division.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
                        <div>
                            <a>1 Division</a><br>
                        </div>
                    </div>
                </div>

                <div id="tatics" style="display: none;">
                    <div class="inner-column" style="padding: 0px; text-align: center; margin-top: 5%;">
                        <img src="images/img/wikiPage/hoi4/hoi4-tatics.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
                        <div>
                            <a>1 Tattics</a><br>
                        </div>
                    </div>
                    <div class="inner-column" style="margin-top: 5%; padding: 0px; text-align: center;">
                        <img src="images/img/wikiPage/hoi4/hoi4-tatics.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
                        <div>
                            <a>1 Tattics</a><br>
                        </div>
                    </div>
                    <div class="inner-column" style="margin-top: 5%; padding: 0px; text-align: center;">
                        <img src="images/img/wikiPage/hoi4/hoi4-tatics.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
                        <div>
                            <a>1 Tattics</a><br>
                        </div>
                    </div>
                    <div class="inner-column" style="margin-top: 5%; padding: 0px; text-align: center;">
                        <img src="images/img/wikiPage/hoi4/hoi4-tatics.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
                        <div>
                            <a>1 Tattics</a><br>
                        </div>
                    </div>
                    <div class="inner-column" style="margin-top: 5%; padding: 0px; text-align: center;">
                        <img src="images/img/wikiPage/hoi4/hoi4-tatics.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
                        <div>
                            <a>1 Tattics</a><br>
                        </div>
                    </div>
                    <div class="inner-column" style="margin-top: 5%; padding: 0px; text-align: center;">
                        <img src="images/img/wikiPage/hoi4/hoi4-tatics.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
                        <div>
                            <a>1 Tattics</a><br>
                        </div>
                    </div>
                </div>
            </div>

            <div id="column-all" class="column-container" style="width: 35%; margin-top: 0%;">
                <div class="inner-column" style="margin-top: 0%; padding: 10px; text-align: center;">
                    <a id="collapseBegginerGuide" onclick="toggleCollapse()">FORUM</a>
                    <a id="decollapseBegginerGuide" onclick="deToggleCollapse()" style="display: none;">GUIDES</a>
                </div>
                <div>
                    <div id="begginerGuide" style="height: 80%;">
                        <div class="inner-column" style="margin-top: 5%; padding: 0px; height: 40%;">
                            <div style="height: 80%;">
                                <iframe width="100%" height="100%" style="border-top-left-radius: 10px; border-top-right-radius: 10px;" src="https://www.youtube.com/embed/QvHT121_lWQ?si=U8lOVD23SOws7MUR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <a id="textList">Begginer Guide</a>
                            </div>  
                        </div>
                        <div class="inner-column" style="margin-top: 5%; padding: 0px; height: 40%;">
                            <div style="height: 80%;">
                                <iframe width="100%" height="100%" style="border-top-left-radius: 10px; border-top-right-radius: 10px;" src="https://www.youtube.com/embed/QvHT121_lWQ?si=U8lOVD23SOws7MUR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <a id="textList">Begginer Guide</a>
                            </div>  
                        </div>
                        <div class="inner-column" style="margin-top: 5%; padding: 0px; height: 40%;">
                            <div style="height: 80%;">
                                <iframe width="100%" height="100%" style="border-top-left-radius: 10px; border-top-right-radius: 10px;" src="https://www.youtube.com/embed/QvHT121_lWQ?si=U8lOVD23SOws7MUR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <a id="textList">Begginer Guide</a>
                            </div>  
                        </div>
                        <div class="inner-column" style="margin-top: 5%; padding: 0px; height: 40%;">
                            <div style="height: 80%;">
                                <iframe width="100%" height="100%" style="border-top-left-radius: 10px; border-top-right-radius: 10px;" src="https://www.youtube.com/embed/QvHT121_lWQ?si=U8lOVD23SOws7MUR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <a id="textList">Begginer Guide</a>
                            </div>  
                        </div>
                    </div>
                    <div id="forum" style="display: none;">
                        <div class="inner-column" style="margin-top: 5%; text-align: center;">
                            <h2 style="margin-left: 35%;">FORUM</h2>
                            <div>
                                <a>asdasd</a><br>
                                <a>asdasd</a><br>
                                <a>asdasd</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>

<script src="scripts/hoi4.js"></script>
</body>
</html>