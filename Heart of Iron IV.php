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
    <title id="title">Heart of Iron IV</title>
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
                <h2 style="margin-left: 30px;">Heart Of Iron IV</h2>
                <a style="font-size: 12px;">Paradox Interactive</a>
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
                            <a style="font-size: 12px;">Hearts of Iron IV è un videogioco strategico in tempo reale, ambientato nella seconda guerra mondiale, sviluppato da Paradox Interactive e rappresenta l'ultimo della serie Hearts of Iron. È stato annunciato formalmente nel gennaio 2014 come data di pubblicazione fissata per il primo trimestre del 2015.[1] È stato poi posposto al secondo trimestre del 2015.[2] All'E3 2015 il direttore creativo Johan Andersson ha affermato che la data di pubblicazione sarebbe stata spostata in un tentativo di risolvere alcuni gravi problemi riscontrati con il gioco.[3] Tuttavia Andersson ha confermato che il gioco non sarebbe stato pubblicato durante il primo trimestre del 2016.[4] Il 15 marzo 2016 è stato annunciato che il gioco sarebbe stato pubblicato il 6 giugno 2016, anniversario dello sbarco in Normandia. Durante l'evento "Ask Me Anything" su Reddit, Andresson ha promesso migliore intelligenza artificiale rispetto a Hearts of Iron III.[5] Ha anche affermato che il gioco sarebbe stato disponibile per Linux.</a>
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
                    <div id="Forum" style="display: none;">
                        <button id="new-comment">+</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="newCommentModal" class="modal" style="display: none; position: fixed; z-index: 1; left: 0;	top: 0;	width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.4);">
        <div class="modal-content">
            <form action="back-wiki.php" method="post">            
                <input type="hidden" name="email" value=<?php echo $email; ?>>
                <input type="hidden" name="wiki" value="Heart of Iron IV">
                <span class="close">&times;</span>
                <h2>Aggiungi nuovo commento</h2>
                <textarea name="commit" id="text-commento" cols="60" rows="20"></textarea>
                <!-- Pulsanti per confermare o annullare la cancellazione -->
                <button type="submit" id="confirm-commit">Conferma</button>
                <button type="button" id="cancel-commit">Annulla</button>
            </form>
        </div>
    </div>
</div>

<script src="scripts/hoi4.js"></script>
<script src="wikiSettings.js"></script>
</body>
</html>