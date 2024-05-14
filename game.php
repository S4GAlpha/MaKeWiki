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
    <div id="row" style="display: flex;">
      <div id="column-suggested" class="column-container" style="width: 25%; margin-left: 0%; margin-top: 10%;">
        <div class="inner-column" style="padding: 0px;">
        <img src="images/img/wikiPage/game/imageGame.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
        </div>
        <div class="inner-column" style="margin-top: 0%; border-top-left-radius: 0px; border-top-right-radius: 0px;">
          <h2>TOP GAME</h2>
          <ul>
            <li>
              <a href="eldenRing.php" style="color: #ffff;">Elden Ring Wiki</a>
            </li>
            <li>
              <a href="Heart of Iron IV.php" style="color: #ffff;">HOI4 Wiki</a>
            </li>
            <li>
              <a href="stardewValley.php" style="color: #ffff;">Stardew Valley</a>
            </li>
            <li>
              <a href="pagina_anime.html" style="color: #ffff;">Pokepedia</a>
            </li>
          </ul>
        </div>
      </div>

      <div id="column-news" class="column-container" style="width: 60%; margin-left: 5%; margin-right: 6%;">
        <div class="inner-column" style="padding: 0px;">
          <img src="images/gif/game.gif" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: flex;">
            <a id="nameAuth">Nome Autore</a>
            <a id="date">Data caricaento</a>
          </div>
        </div>
        <div class="inner-column" style="margin-top: 5%; padding: 0px;">
          <img src="images/gif/game.gif" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: flex;">
            <a id="nameAuth">Nome Autore</a>
            <a id="date">Data caricaento</a>
          </div>
        </div>
        <div class="inner-column" style="margin-top: 5%; padding: 0px;">
          <img src="images/gif/game.gif" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: flex;">
            <a id="nameAuth">Nome Autore</a>
            <a id="date">Data caricaento</a>
          </div>
        </div>
        <div class="inner-column" style="margin-top: 5%; padding: 0px;">
          <img src="images/gif/game.gif" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: flex;">
            <a id="nameAuth">Nome Autore</a>
            <a id="date">Data caricaento</a>
          </div>
        </div>
        <div class="inner-column" style="margin-top: 5%; padding: 0px;">
          <img src="images/gif/game.gif"alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: flex;">
            <a id="nameAuth">Nome Autore</a>
            <a id="date">Data caricaento</a>
          </div>
        </div>
        <div class="inner-column" style="margin-top: 5%; padding: 0px;">
          <img src="images/gif/game.gif" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <div style="display: flex;">
            <a id="nameAuth">Nome Autore</a>
            <a id="date">Data caricaento</a>
          </div>
        </div>
      </div>
      <div id="column-all" class="column-container" style="width: 25%; margin-top: 4%;">
        <div class="inner-column" style="padding: 0px; margin-top: 0%;">
          <img src="images/img/adBlocker.png" alt="" class="centered-image" id="adblock-warning" style="border-radius: 10px; display: none;"/>
          <img src="images/img/logo.jpg" alt="" class="centered-image" id="ads" style="border-radius: 10px; display: none;"/>
        </div>
        <div>
          <div class="inner-column" style="margin-top: 5%; padding: 0px;">
          <img src="images/gif/game.gif" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <a id="textList">Lista 1</a>
          </div>
          <div class="inner-column" style="margin-top: 5%; padding: 0px;">
          <img src="images/gif/game.gif" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <a id="textList">Lista 1</a>
          </div>
          <div class="inner-column" style="margin-top: 5%; padding: 0px;">
          <img src="images/gif/game.gif" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <a id="textList">Lista 1</a>
          </div>
          <div class="inner-column" style="margin-top: 5%; padding: 0px;">
          <img src="images/gif/game.gif" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <a id="textList">Lista 1</a>
          </div>
          <div class="inner-column" style="margin-top: 5%; padding: 0px;">
          <img src="images/gif/game.gif" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <a id="textList">Lista 1</a>
          </div>
          <div class="inner-column" style="margin-top: 5%; padding: 0px;">
          <img src="images/gif/game.gif" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
          <a id="textList">Lista 1</a>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

</body>
</html>
