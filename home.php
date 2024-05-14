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
      <div id="column-central" class="column-container" style="width: 60%; margin-left: 20%; text-align: center;">
        <div class="inner-column" style="padding: 0px;">
          <h2 style="text-align: center; color: #ffff; margin-left: 35%;">Lorem ipsum!</h2>
          <div class="typing-text" id="autoType" style="color: #ffff; width: 80%; margin-left: 10%;"></div>

          <script src="scripts/typingtext_index.js"></script><br>

          <img src="images/gif/greeting.gif" alt="" class="centered-image"/>
        </div>
        <div class="inner-column" style="padding: 0px; border-top-left-radius: 0px; border-top-right-radius: 0px;">
          <div class="void" id="void">
            <div class="crop">
              <ul class="void-ul" id="card-list" style="--count: 6;">
                <li class="void-li"><div class="card"><a href=""><span class="model-name">Anime News</span><span>Novità anime arrivate direttamente dal Sol Levante</span></a></div></li>
                <li class="void-li"><div class="card"><a href=""><span class="model-name">Game News</span><span>Novità giochi da parte di Oasis</span></a></div></li>
                <li class="void-li"><div class="card"><a href=""><span class="model-name">Preferiti</span><span>Visuallizza di nuovo forum che ti hanno fatto dire "TI LOVVO"</span></a></div></li>
                <li class="void-li"><div class="card"><a href=""><span class="model-name">Random Wiki</span><span>Per gi amanti del rischio, oppure per chi vuole perdere tempo</span></a></div></li>
                <li class="void-li"><div class="card"><a href=""><span class="model-name">WIKI</span><span>La WIKI delle WIIIIIIIKKKKKIII è qui che ti aspetta che fai non clicchi?!</span></a></div></li>
                <li class="void-li"><div class="card"><a href=""><span class="model-name">Casual</span><span>Le Wiki che non sapevi ti potessero interessare ti aspettano</span></a></div></li>
              </ul>
              <div class="last-circle"></div>
              <div class="second-circle"></div>
            </div>
            <div class="mask"></div>
            <div class="center-circle"></div>
          <div>
        </div>
      </div>
    </div>
  </main>
</div>
</body>
</html>