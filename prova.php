<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">One Piece</title>
    <script src="adBlock.js"></script>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/anime_game_style.css">
    <style>
        #main {
            background-image: url(images/img/wikiPage/anime/One-Piece/OPWallpaper.jpg);
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
            position: relative; /* Aggiunto per il posizionamento assoluto del messaggio */
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
            border-radius: 5px;
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
            <img style="width: 200px; height: 100px; margin-left: 35%;" src="images/img/wikiPage/anime/One-Piece/op-logo.jpg" alt="Account Icon"/>
            <div>
                <h2 style="margin-left: 30px;">One Piece</h2>
                <a style="font-size: 12px;">Eichiro Oda</a>
            </div>
            <button class="heart-button" id="favoriteButton">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
            </button>
            <div class="favorite-message" id="favoriteMessage"></div>
        </div>  
        <div id="row" style="display: flex; margin-top: 10%;">
            <div id="column-suggested" class="column-container" style="width: 25%; margin-left: 10%; margin-top: 0%;">
                <div class="inner-column" style="padding: 0px; margin-top: 0%;">
                    <img src="images/img/adBlocker.png" alt="" class="centered-image" id="adblock-warning" style="border-radius: 10px; display: none;"/>
                    <img src="images/img/logo.jpg" alt="" class="centered-image" id="ads" style="border-radius: 10px; display: block;"/>
                </div>
            </div>
            <div id="column-all" class="column-container" style="width: 50%; margin-left: 5%; height: auto;">
                <div id="content" class="inner-column" style="padding: 0px; margin-top: 0%;">
                    <h2> Capitolo 1083: La verità dietro la rivoluzione</h2>
                    <p>Intanto, tra i membri del CP0 c'è un ragionevole dibattito sulla vera motivazione dietro la Rivoluzione. Gli eventi sembrano andare nella direzione di una guerra aperta...</p>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("favoriteButton").addEventListener("click", function() {
            this.classList.toggle("clicked");

            var message = document.getElementById("favoriteMessage");
            if (this.classList.contains("clicked")) {
                message.textContent = "Aggiunto ai preferiti!";
            } else {
                message.textContent = "Rimosso dai preferiti!";
            }
            message.style.display = "block";
            setTimeout(function() {
                message.style.display = "none";
            }, 3000); // Nasconde il messaggio dopo 3 secondi
        });
    });
</script>

</body>
</html>
