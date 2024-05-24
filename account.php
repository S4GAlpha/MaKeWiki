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
  <title>Account</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/account_style.css">
  <link rel="stylesheet" href="style/anime_game_style.css">
  <style>
    #main {
      background-image: url(images/background/accountWallpaper.jpg);
      background-size: cover; /* Copre l'intera area disponibile */
      background-position: top center; /* Posiziona l'immagine in alto e al centro */
      background-repeat: no-repeat; /* Non ripetere l'immagine */
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
              <img style="width: 20px; height: 20px;" src="images/navbar/users.png" alt="Login Icon" />
            </div>
            <span class="link-text" style="color: #ffff">Ospite</span>
          </a>
        </li>
      <?php endif; ?>
    </ul>
  </nav>

  <!-- Main --> 

  <?php if ($nick=="") : ?>
<main id="main" class="flexbox-col" style="padding: 0px;">
  <div id="login-signup" style="width: 100%; height: 100%;">
    <div id="ain" style="width: 100%; height: 100%;">
      <section class="user">
        <div class="user_options-container" id="user_options-container">
          <div class="user_options-text" id="options-text">
            <div class="user_options-unregistered">
              <h2 class="user_unregistered-title">Don't have an account?</h2>
              <p class="user_unregistered-text">Create now!</p>
              <button class="user_unregistered-signup" id="signup-button">Sign up</button>
            </div>
            <div class="user_options-registered">
              <h2 class="user_registered-title">Already have an account!</h2>
              <p class="user_registered-text">Get started..</p>
              <button class="user_registered-login" id="login-button">Login</button>
            </div>
          </div>
          <div class="user_options-forms" id="user_options-forms" style="max-height: 800px;">
            <div class="user_forms-login">
              <h2 class="forms_title">Login</h2>
              <form class="forms_form" action="back-account/login.php" method="post">
                <fieldset class="forms_fieldset">
                  <div class="forms_field">
                    <input type="email" name="email" placeholder="Email" class="forms_field-input" required autofocus />
                  </div>
                  <div class="forms_field">
                    <input type="password" name="password" placeholder="Password" class="forms_field-input" required />
                  </div>
                </fieldset>
                <div class="forms_buttons">
                  <button type="button" class="forms_buttons-forgot">Forgot password?</button>
                  <input type="submit" value="Login" class="forms_buttons-action">
                </div>
              </form>
            </div>
            <div class="user_forms-signup" style="height: 800px; top: 25px;">
              <h2 class="forms_title">Sign Up</h2>
              <form class="forms_form" action="back-account/signup.php" method="post">
                <fieldset class="forms_fieldset">
                  <div class="forms_field">
                    <input type="text" name="nome" placeholder="Nome" class="forms_field-input" required />
                  </div>
                  <div class="forms_field">
                    <input type="text" name="cognome" placeholder="Cognome" class="forms_field-input" required />
                  </div>
                  <div class="forms_field">
                    <input type="text" name="nick" placeholder="Nickname" class="forms_field-input" required />
                  </div>
                  <div class="forms_field">
                    <input type="email" name="email" placeholder="Email" class="forms_field-input" required />
                  </div>
                  <div class="forms_field">
                    <input type="password" name="password" placeholder="Password" class="forms_field-input" required />
                  </div>
                </fieldset>
                <div class="forms_buttons">
                  <input type="submit" value="Sign up" class="forms_buttons-action">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</main>
<?php else : ?>
    <div id="visualizzaAccount">
      <main id="main" class="flexbox-col" style="display: flex; padding: 20px; margin-left: 0px; height: 100vh; position: fixed; align-items: center; justify-content: center;">
        <div id="account-form" style="max-width: 90%; margin-left: 190px; align-items: center;">
          <div id="ain" class="container" style="width: 100%; min-height: 100%; margin-top: 0px; item-align: center; border-radius: 10px; overflow: auto;">
            <div class="view" style="max-width: 100%;">
              <div id="column-profile" style="max-width: 20%;">
                  <img src="images/img/profile-base-icon.png" alt="Profile Picture" id="profile-icon">
                  <?php echo "<p id=\"nick-utente\">".$nick ."</p>"; ?>

                  <button id="button-acc-profile" type="submit"  onclick="visualizzaAccount.style.display = 'none'; modificaAccount.style.display = 'block';" class="forms_buttons-action">Modifica Account</button>

                  <form class="forms_form" action="back-account/logout.php" method="post">
                    <div class="forms_buttons">
                      <input id="button-acc-profile" type="submit" value="Logout" class="forms_buttons-action">
                    </div>
                  </form>
              </div>
              <div id="column-info" style="width: 100%; margin-left: 10px;">
                <div id="notification" style="text-align: center;">
                  <?php if($wikiCount == 0) : ?> 
                  <button class="notification-item" onclick="window.location.href='new-wiki.php';" style="text-align: center;">
                    Hai sbloccato la possibilità di creare le tue WIKI 
                    <br><span style="color: rgb(172, 38, 255);">Clicca per provare la creazione WIKI</span>
                  </button>
                  <?php else : ?>
                  <button class="notification-item" onclick="window.location.href='wiki.php';" style="text-align: center;">
                    Hai sbloccato la possibilità di visualizzare le tue WIKI 
                    <br><span style="color: rgb(172, 38, 255);">Clicca per visualizzare le tue WIKI</span>
                  </button>
                  <?php endif; ?>
                  <div style="display: flex; justify-content: center;">
                    <button class="notification-item" id="hideNotifications" onclick="notification.style.display='none';">Hide Notifications</button>
                  </div>
                </div>
                <div id="description" style="text-align: center;">
                  <h3 class="section-title">Descrizione</h3>
                  <div class="activity-item">
                    <p class="activity-text" style="max-height: 200px; overflow-y: auto; margin: 0 auto; width: 100%;">
                      Descrizione Utente
                    </p>
                  </div>
                </div>

                <div id="popular-wiki" style="text-align: center;">
                  <h3 class="section-title">Le Tue Wiki Popolari</h3>
                  <div class="activity-item" style="width: 40%; margin: 0 auto;">
                    <div style="display: flex; align-items: center; justify-content: center;">
                      <div style="width: 35%; padding: 10px; display: flex; align-items: center; justify-content: center;">
                        <p>1°</p>
                        <img style="width: 100%; height: auto; margin-left: 20px;" src="images/gif/sus.gif" alt="Wiki Image" class="centered-image" />
                      </div>
                      <div style="margin-left: 20px;">
                        <p class="activity-text" style="margin: 0;">Nome Wiki</p>
                        <p class="activity-text">Tipologia</p>
                      </div>
                    </div>
                  </div>
                  <div style="display: flex; align-items: center; justify-content: center;">
                    <div class="activity-item" style="width: 40%; margin: 0 auto; margin-top: 10px;">
                      <div style="display: flex; align-items: center; justify-content: center;">
                        <div style="width: 35%; padding: 10px; display: flex; align-items: center; justify-content: center;">
                          <p>2°</p>
                          <img style="width: 100%; height: auto; margin-left: 20px;" src="images/gif/sus.gif" alt="Wiki Image" class="centered-image" />
                        </div>
                        <div style="margin-left: 20px;">
                          <p class="activity-text" style="margin: 0;">Nome Wiki</p>
                          <p class="activity-text">Tipologia</p>
                        </div>
                      </div>
                    </div>
                    <div class="activity-item" style="width: 40%; margin: 0 auto; margin-top: 10px;">
                      <div style="display: flex; align-items: center; justify-content: center;">
                        <div style="width: 35%; padding: 10px; display: flex; align-items: center; justify-content: center;">
                          <p>3°</p> 
                          <img style="width: 100%; height: auto; margin-left: 20px;" src="images/gif/sus.gif" alt="Wiki Image" class="centered-image" />
                        </div>
                        <div style="margin-left: 20px;">
                          <p class="activity-text" style="margin: 0;">Nome Wiki</p>
                          <p class="activity-text">Tipologia</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <div id="modificaAccount" style="display: none; width: 100%;">
      <main id="main" class="flexbox-col" style="display: flex; padding: 20px; margin-left: 0px; height: 100vh; position: fixed; align-items: center; justify-content: center;">
        <div id="account-form" style="max-width: 100%; margin-left: 190px; align-items: center;">
          <div id="ain" class="container" style="width: 100%; min-height: 100%; margin-top: 0px; item-align: center; border-radius: 10px; overflow: auto;">
            <div class="view" style="max-width: 100%;">
              <div id="column-profile" style="max-width: 20%;">
                  <div class="inner-column" style="background-color: rgba(79, 2, 151, 0); padding: 0px; margin-top: 5%; border-bot-left-radius: 0px; border-bot-right-radius: 0px;">
                    <img src="images/img/profile-base-icon.png" class="customButton centered-image" data-index="1" alt="" style="width: 100%; height: 100%;"/>
                    <form class="uploadForm" enctype="multipart/form-data" style="display: none;">
                        <input type="file" class="fileInput" data-index="1" accept="image/*">
                    </form>
                    <div class="imageContainer" data-index="1" style="border-top-left-radius: 10px; border-top-right-radius: 10px; border-bot-left-radius: 0px; border-bot-right-radius: 0px;"></div>
                  </div>
                  <ul>
                    <li>
                      <a style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="true">
                        <?php echo "<p id=\"nick-utente\">".$nick ."</p>"; ?>
                      </a>
                    </li>
                  </ul>
                  <button id="button-acc-profile" type="submit"  onclick="visualizzaAccount.style.display = 'block'; modificaAccount.style.display = 'none';" class="forms_buttons-action">Salva Modifica</button>
              </div>
              <div id="column-info" style="width: 100%; margin-left: 10px;">
                <div id="description" style="text-align: center;">
                  <h3 class="section-title">Descrizione</h3>
                  <div class="activity-item">
                    <p class="activity-text" style="max-height: 200px; overflow-y: auto; margin: 0 auto; width: 100%;">
                      <ul>
                        <li>
                          <a style="font-size: 12px; display: block; width: 100%; border: none;" contenteditable="true">
                            Inserisci qui la descrizione
                          </a>
                        </li>
                      </ul>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    </main>
    <?php endif; ?>
  
</div>

<script src="addImm.js"></script>
<script>
  const signupButton = document.getElementById("signup-button"),
  loginButton = document.getElementById("login-button"),
  userForms = document.getElementById("user_options-forms");

  const account_form = document.getElementById("account-form");

  const loginSignupDiv = document.getElementById("login-signup");

  const visualizzaAccount = document.getElementById("visualizzaAccount");
  const modificaAccount = document.getElementById("modificaAccount");

  function modificaAccount () {
    visualizzaAccount.style.display = 'none';
    modificaAccount.style.display = 'block';
  }

  function salvaModifica () {
    modificaAccount.style.display = 'none';
    visualizzaAccount.style.display = 'block';
  }

  function login () {
    event.preventDefault();
    // Qui puoi aggiungere la logica per il login
    alert("Login successful!");
    // Nascondi il div login-signup
    loginSignupDiv.style.display = 'none';
    account_form.style.display = 'block';
  }

  function signup () {
    event.preventDefault();
    // Qui puoi aggiungere la logica per la registrazione
    alert("Signup successful!");
    // Nascondi il div login-signup
    loginSignupDiv.style.display = 'none';
    account_form.style.display = 'block';
  }


  document.addEventListener('DOMContentLoaded', function () {
    const hideNotificationsButton = document.getElementById('hideNotifications');
    const notificationSection = document.getElementById('notification');

    hideNotificationsButton.addEventListener('click', function () {
        notificationSection.style.display = 'none';
    });
});

</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
  const signupButton = document.getElementById("signup-button");
  const loginButton = document.getElementById("login-button");
  const userForms = document.getElementById("user_options-forms");

  signupButton.addEventListener("click", () => {
    userForms.classList.remove("bounceRight");
    userForms.classList.add("bounceLeft");
  }, false);

  loginButton.addEventListener("click", () => {
    userForms.classList.remove("bounceLeft");
    userForms.classList.add("bounceRight");
  }, false);
});
</script>

</body>
</html>