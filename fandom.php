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
      background-image: url(images/background/fandomWallpaper.jpg);
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
      <div id="column-suggested" class="column-container" style="width: 25%; margin-left: 0%; margin-top: 0%;">
        <div class="inner-column" style="margin-top: 0%; text-align: center;">
        <div class="profile-icon"></div>
          <a class="welcome-message" style="font-size: 12px;">Effettua il login o signup</a>
          <a href="account.php" class="view-profile-button" style="font-size: 12px; color: white;">Pagina Accesso</a>
        </div>
        <div class="inner-column" style="padding: 0px; margin-top: 5%;">
        <img src="images/img/wikiPage/fandom/imageFandom.jpg" alt="" class="centered-image" style="border-top-left-radius: 10px; border-top-right-radius: 10px;"/>
        </div>
        <div class="inner-column" style="margin-top: 0%; border-top-left-radius: 0px; border-top-right-radius: 0px;">
          <h2>My Wiki</h2>
          <ul>
            <li>
              <a href="pagina_anime.html">1 Wiki</a>
            </li>
            <li>
              <a href="pagina_anime.html">2 Wiki</a>
            </li>
            <li>
              <a href="pagina_anime.html">3 Wiki</a>
            </li>
            <li>
              <a href="pagina_anime.html">4 Wiki</a>
            </li>
          </ul>
        </div>
      </div>

      <div id="column-news" class="column-container" style="width: 60%; margin-left: 5%; margin-right: 6%;">
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
        <div class="inner-column" style="padding: 0px; margin-top: 5%; ">
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
      </div>
      <div id="column-all" class="column-container" style="width: 25%; margin-top: 0%;">
        <div>
          <div class="inner-column" style="margin-top: 0%; padding: 0px; height: 430px;">
            <div style="height: 350px; overflow-y: auto;">
              <a id="textList" style="margin-left: 5px;">Fandom Consigliati</a>
              <div>
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
                <div style="display: flex; margin-top: 2%;">
                  <img style="height: 50px;" src="images/navbar/users.png" alt="Account Icon" />
                  <div style="margin-left: 20px;">
                    <a style="font-size: 12px;">nomeFandom</a>
                    <div style="padding: 0px;">
                      <a style="font-size: 8px;">counter like</a>
                    </div>
                  </div>
                  <img style="height: 50px; margin-left: 40px;" src="images/navbar/users.png" alt="Account Icon" />
                </div>
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
                <div style="display: flex; margin-top: 2%;">
                  <img style="height: 50px;" src="images/navbar/users.png" alt="Account Icon" />
                  <div style="margin-left: 20px;">
                    <a style="font-size: 12px;">nomeFandom</a>
                    <div style="padding: 0px;">
                      <a style="font-size: 8px;">counter like</a>
                    </div>
                  </div>
                  <img style="height: 50px; margin-left: 40px;" src="images/navbar/users.png" alt="Account Icon" />
                </div>
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
</body>
</html>