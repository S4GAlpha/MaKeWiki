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
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Account</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/account_style.css">
  <style>
    #main {
      background-image: url(images/background/Sfondo.jpg);
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

  <?php if ($nick=="") : ?>
  <!-- Main -->
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
              <h2 class="user_registered-title">Already have a account!</h2>
              <p class="user_registered-text">Get started..</p>
              <button class="user_registered-login" id="login-button">Login</button>
            </div>
          </div>
          
          <div class="user_options-forms" id="user_options-forms">
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
            <div class="user_forms-signup">
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
  <main id="main" class="flexbox-col" style="padding: 20px;">
    <div id="account-form" style="display: width: 100%; align-items: center;">
    <div id="ain" class="container" style="min-height: 100%; margin-top: 2px; width: 60%; item-align: center; margin-left: 20%; overflow: auto;">
      <div class="view">
          <div id="column-profile">
              <img src="images/img/profile-base-icon.png" alt="Profile Picture" id="profile-icon">
              <?php echo "<p id=\"nick-utente\">".$nick ."</p>"; ?>
              <button id="button-acc-profile">Edit Account</button>
          </div>
          <div id="column-info">
              <div id="notification">
                  <h3 class="section-title">Notifications</h3>
                  <button class="notification-item">New message from Jane</button>
                  <button class="notification-item">New comment on your post</button>
                  <button class="notification-item">New follower</button>
                  <button class="notification-item" id="hideNotifications">Hide Notifications</button>
              </div>
              <div id="activity">
                  <h3 class="section-title">Activity</h3>
                  <div class="activity-item">
                      <p class="activity-text">Created a new wiki: Introduction to Programming</p>
                      <time class="activity-time">2 hours ago</time>
                  </div>
                  <div class="activity-item">
                      <p class="activity-text">Edited a wiki: JavaScript Fundamentals</p>
                      <time class="activity-time">4 hours ago</time>
                  </div>
                  <div class="activity-item">
                      <p class="activity-text">Commented on a wiki: HTML and CSS for Beginners</p>
                      <time class="activity-time">1 day ago</time>
                  </div>
              </div>
              <div id="favorite-wikis">
                  <h3 class="section-title">Favorite Wikis</h3>
                  <div class="wiki-item">
                      <img src="images/wiki-cover.jpg" alt="Wiki Cover" class="wiki-cover">
                      <div class="wiki-info">
                          <h4 class="wiki-title">Introduction to Programming</h4>
                          <p class="wiki-description">A beginner's guide to programming concepts and languages</p>
                      </div>
                  </div>
                  <div class="wiki-item">
                      <img src="images/wiki-cover.jpg" alt="Wiki Cover" class="wiki-cover">
                      <div class="wiki-info">
                          <h4 class="wiki-title">JavaScript Fundamentals</h4>
                          <p class="wiki-description">A comprehensive guide to JavaScript programming</p>
                      </div>
                  </div>
                  <div class="wiki-item">
                      <img src="images/wiki-cover.jpg" alt="Wiki Cover" class="wiki-cover">
                      <div class="wiki-info">
                          <h4 class="wiki-title">HTML and CSS for Beginners</h4>
                          <p class="wiki-description">A beginner's guide to HTML and CSS web development</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
    </div>
  </main>
  <?php endif; ?>
  
</div>

<script>
  const signupButton = document.getElementById("signup-button"),
  loginButton = document.getElementById("login-button"),
  userForms = document.getElementById("user_options-forms");

  const account_form = document.getElementById("account-form");

  const loginSignupDiv = document.getElementById("login-signup");

  /**
   * Add event listener to the "Sign Up" button
   */
  signupButton.addEventListener(
    "click",
    ()=>{
      userForms.classList.remove("bounceRight");
      userForms.classList.add("bounceLeft");
    },
    false
  );

  /**
   * Add event listener to the "Login" button
   */
  loginButton.addEventListener(
    "click",
    () => {
      userForms.classList.remove("bounceLeft");
      userForms.classList.add("bounceRight");
    },
    false
  );

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


</body>
</html>
