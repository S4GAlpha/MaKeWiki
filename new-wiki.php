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
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Prova Nuova Wiki</title>
    <script src="adBlock.js"></script>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/anime_game_style.css">
    <style>
        #main {
          background-image: url(images/img/wikiPage/home/imageHome.jpg);
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

        .heart-button {
            background: none;
            border: none;
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 10px;
            outline: none; /* Rimuove il bordo del pulsante quando viene cliccato */
        }

        .heart-button:focus {
            outline: none; /* Rimuove il bordo del pulsante quando viene focalizzato */
        }

        .heart-button svg {
            width: 30px;
            height: 30px;
            fill: grey;
            transition: fill 0.3s ease;
        }

        .heart-button.clicked svg {
            fill: red;
            animation: heart-pulse 0.6s ease forwards;
        }

        @keyframes heart-pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }

        .favorite-message {
            position: absolute;
            right: 50px;
            top: 50px;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 10px;
            border-radius: 0px;
            display: none;
            animation: fadeOut 3s forwards;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }
            80% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        #customButton {
          cursor: pointer;
          border: none; /* Rimuovi il bordo */
        }

        #fileInput {
          display: none; /* Nascondi l'input file per impostazione predefinita */
        }

        #imageContainer {
          width: 100%; /* Imposta la larghezza al 100% del contenitore */
          height: 100%; /* Imposta l'altezza al 100% del contenitore */
        }

        #imageContainer img {
          cursor: pointer;
          width: 100%; /* Imposta la larghezza al 100% del contenitore */
          height: 100%; /* Imposta l'altezza al 100% del contenitore */
          object-fit: cover; /* Imposta l'immagine per coprire l'intero contenitore mantenendo le proporzioni */
        }


        /* Il tuo CSS esistente */
        .fixed-card {
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 300px;
      background-color: rgba(79, 2, 151, 0.5);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      z-index: 1000;
    }

    .fixed-card h3 {
      color: white;
      margin-top: 0;
    }

    .fixed-card p {
      color: white;
      margin-bottom: 10px;
    }

    .fixed-card label {
      color: white;
      display: block;
      margin-bottom: 5px;
    }

    .fixed-card input[type="range"] {
      width: 100%;
      margin-bottom: 10px;
    }

    .fixed-card a {
      background-color: rgba(79, 2, 151, 0.27);
      color: white;
      text-align: center;
      padding: 10px;
      border-radius: 5px;
      display: block;
      text-decoration: none;
    }
    </style>
</head>

<body>
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
      <div id="row" style="display: flex; text-align: center; margin-top: 0%;">
        <div class="inner-column" style="padding: 0px; width: 20%; margin-left: 30%; margin-top: 0%; border-bot-left-radius: 0px; border-bot-right-radius: 0px;">
          <img src="images/navbar/new-wiki.png" class="customButton centered-image" data-index="0" alt="" style="width: 20%; height: 50%; margin-top: 12%;"/>
          <form class="uploadForm" enctype="multipart/form-data" style="display: none;">
            <input type="file" class="fileInput" data-index="0" accept="image/*">
          </form>
          <div class="imageContainer centered-image" data-index="0" style="width: 90%; height: 90%; margin-top: 6%; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bot-left-radius: 0px; border-bot-right-radius: 0px;"></div>
        </div>
        <div>
          <ul style="display: flex; align-items: center; justify-content: center; height: 70%;">
            <li>
              <h2 id="textList" style="margin-top: 10%; font-size: 30px; display: block; width: 100%; margin-left: 30px; border: none;" contenteditable="true">
                Inserisci qui titolo
              </h2>
            </li>
          </ul>
          <ul>
            <li>
              <a id="textList" style="font-size: 12px; display: block; width: 92%; margin-left: 30px; border: none;" contenteditable="true">
                Inserisci qui sviluppatore
              </a>
            </li>
          </ul>
        </div>
        <button class="heart-button" id="favoriteButton" style="display: none;">
          <svg style="outline: none;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
        </button>
        <div class="favorite-message" id="favoriteMessage">Salvata wiki tra i preferiti</div>
      </div>

      <div id="row" style="display: flex; margin-top: 10%;">
        <div id="column-suggested" class="column-container" style="width: 25%; margin-left: 10%; margin-top: 0%;">
          <div class="inner-column" style="padding: 0px; margin-top: 0%;">
            <img src="images/img/adBlocker.png" alt="" class="centered-image" id="adblock-warning" style="border-radius: 10px; display: none;"/>
            <img src="images/img/logo.jpg" alt="" class="centered-image" id="ads" style="border-radius: 10px; display: none;"/>
          </div>
          <div class="inner-column" style="padding: 0px; margin-top: 5%; border-bot-left-radius: 0px; border-bot-right-radius: 0px;">
            <img src="images/navbar/new-wiki.png" class="customButton centered-image" data-index="1" alt="" style="width: 20%; height: 100%;"/>
            <form class="uploadForm" enctype="multipart/form-data" style="display: none;">
                <input type="file" class="fileInput" data-index="1" accept="image/*">
            </form>
            <div class="imageContainer" data-index="1" style="border-top-left-radius: 10px; border-top-right-radius: 10px; border-bot-left-radius: 0px; border-bot-right-radius: 0px;"></div>
          </div>
          <div class="inner-column" style="margin-top: 0%; border-top-left-radius: 0px; border-top-right-radius: 0px;">
            <h2 id="animeI" style="display: none;">Info Anime</h2>
            <h2 id="gameI" style="display: none;">Info Game</h2>
            <ul>
              <li>
                <a style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="true">
                  Inserisci qui la descrizione
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div id="anime" style="display: none; width: 100%; margin-right: 6%; text-align: center;">
          <div id="row" style="display: flex; margin-top: 0%; background-color: rgba(0, 0, 0, 0);">
            <div id="column-news" class="column-container" style="width: 55%; margin-left: 5%; margin-right: 6%; text-align: center;">
              <div class="inner-column" style="margin-top: 0%; padding: 10px; text-align: center; display: flex; justify-content: center;">
                  <div style="margin-left: 0px;">
                      <a id="collapseFirst">FORUM</a>
                  </div>
              </div>
              <div id="Forum">
                  <button id="new-comment">+</button>
              </div>
            </div>

            <div id="column-all" class="column-container" style="width: 35%; margin-top: 0%;">
              <div class="inner-column" style="margin-top: 0%; padding: 10px; text-align: center;">
                  <a id="collapseBegginerGuide">VIDEOS</a>
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
                </div>
              </div>
            </div>
        </div>
          
        <div id="game" style="display: none; width: 100%; margin-right: 6%; text-align: center;">
          <div id="row" style="display: flex; margin-top: 0%; background-color: rgba(0, 0, 0, 0);">
            <div id="column-news" class="column-container" style="width: 55%; margin-left: 5%; margin-right: 6%; text-align: center;">
              <div class="inner-column" style="margin-top: 0%; padding: 10px; text-align: center; justify-content: center; width: 100%; overflow-x: auto;">
                <div style="display: flex;">
                  <div class="collapse" id="collapseFirst" style="margin-left: 0px;">
                    <ul>
                      <li>
                        <a id="collapseFirst" onclick="toggleDiv('first', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="true">
                          Nome scheda1
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse" id="collapseSecond" style="margin-left: 5%; display: none;">
                    <ul>
                      <li>
                      <a id="collapseSecond" onclick="toggleDiv('second', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="true">
                          Nome scheda2
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse" id="collapseThird" style="margin-left: 5%; display: none;">
                    <ul>
                      <li>
                        <a id="collapseThird" onclick="toggleDiv('third', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="true">
                          Nome scheda3
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse" id="collapseFour" style="margin-left: 5%; display: none;">
                    <ul>
                      <li>
                        <a id="collapseFour" onclick="toggleDiv('four', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="true">
                          Nome scheda4
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse" id="collapseFive" style="margin-left: 5%; display: none;">
                    <ul>
                      <li>
                        <a id="collapseFive" onclick="toggleDiv('five', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="true">
                          Nome scheda5
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div style="display: flex;">
                  <div class="collapse" id="collapseSix" style="margin-left: 0%; display: none;">
                    <ul>
                      <li>
                        <a id="collapseSix" onclick="toggleDiv('six', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="true">
                          Nome scheda6
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse" id="collapseSeven" style="margin-left: 5%; display: none;">
                    <ul>
                      <li>
                        <a id="collapseSeven" onclick="toggleDiv('seven', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="true">
                          Nome scheda7
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse" id="collapseEight" style="margin-left: 5%; display: none;">
                    <ul>
                      <li>
                        <a id="collapseEigth" onclick="toggleDiv('eight', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="true">
                          Nome scheda8
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse" id="collapseNine" style="margin-left: 5%; display: none;">
                    <ul>
                      <li>
                        <a id="collapseNine" onclick="toggleDiv('nine', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="true">
                          Nome scheda9
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="collapse" id="collapseTen" style="margin-left: 5%; display: none;">
                    <ul>
                      <li>
                        <a id="collapseTen" onclick="toggleDiv('ten', this)" style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="true">
                          Nome scheda0
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div id="first" class="card-content" style="display: none;"></div>
              <div id="second" class="card-content" style="display: none;"></div>
              <div id="third" class="card-content" style="display: none;"></div>
              <div id="four" class="card-content" style="display: none;"></div>
              <div id="five" class="card-content" style="display: none;"></div>
              <div id="six" class="card-content" style="display: none;"></div>
              <div id="seven" class="card-content" style="display: none;"></div>
              <div id="eight" class="card-content" style="display: none;"></div>
              <div id="nine" class="card-content" style="display: none;"></div>
              <div id="ten" class="card-content" style="display: none;"></div>
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
                      <ul>
                        <li>
                          <a id="textList" style="font-size: 12px; display: block; width: 80%; margin-left: 10%; border: none;" contenteditable="true">
                            Inserisci qui titolo video
                          </a><br>
                        </li>
                      </ul>
                    </div>  
                  </div>
                  <div class="inner-column" style="margin-top: 5%; padding: 0px; height: 40%;">
                    <div style="height: 80%;">
                      <iframe width="100%" height="100%" style="border-top-left-radius: 10px; border-top-right-radius: 10px;" src="https://www.youtube.com/embed/QvHT121_lWQ?si=U8lOVD23SOws7MUR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                      <ul>
                        <li>
                          <a id="textList" style="font-size: 12px; display: block; width: 80%; margin-left: 10%; border: none;" contenteditable="true">
                            Inserisci qui titolo video
                          </a><br>
                        </li>
                      </ul>
                    </div>  
                  </div>    
                </div>
                <div id="Forum" style="display: none;">
                  <button id="new-comment">+</button>
                </div>
              </div>
            </div>
          </div>

      </div>
    </main>

    <div class="fixed-card" style="max-height: 800px;">
      <h3 style="text-align: center;">Menu WIKI</h3>
      <p style="font-size: 12px; text-align: center;">Seleziona da qui le modifiche che vuoi applicare alla pagina</p>
      <p style="font-size: 12px; text-align: center;"> Niente ---- ----- Anime ----- ---- Game</p>
      <input type="range" id="typeSlider" min="-1" max="1" value="-1" onchange="toggleOptions()">
      <div id="cardSlider" style="display: none;">
        <label  style="font-size: 12px;" for="cardRange">Numero di schede desiderato: <span id="cardValue">1</span></label>
        <input type="range" id="cardRange" min="1" max="10" value="1" oninput="updateSlider()">
      </div>
      <div id="contentSlidersContainer" style="display: none; max-height: 230px; overflow-y: auto;">
        <!-- Slider dei contenuti verranno generati qui -->
      </div>
        <div>
          <a  style="max-height: 76px; font-size: 12px; margin-top: 10px;" href="#" id="chooseImageLink">Choose Background Image</a>
          <input type="file" id="backgroundImageInput" style="display: none;" accept="image/*">
        </div>
      <a href="javascript:void(0);" id="saveButton" onclick="salvaWiki()" style="display: none; pointer-events: auto; max-height: 76px; font-size: 12px; margin-top: 10px;">Salva Wiki</a>
      <!-- Aggiungi il nuovo pulsante per caricare l'immagine di sfondo -->
      <div>
  </div>

    </div>

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
  <script src="addImm.js"></script>
  <script src="menuWiki.js"></script>
  <script>
    document.getElementById('chooseImageLink').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('backgroundImageInput').click();
    });

    document.getElementById('backgroundImageInput').addEventListener('change', function() {
      var input = this;
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          document.querySelector('main').style.backgroundImage = 'url(' + e.target.result + ')';
        }
        reader.readAsDataURL(input.files[0]);
      }
    });
  </script>
</body>
</html>