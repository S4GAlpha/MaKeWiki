<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Account</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/account_style.css">
  <link rel="stylesheet" href="style/home_page_style.css">
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
  <nav id="navbar">
    <ul class="navbar-items flexbox-col">
      <li class="navbar-logo flexbox-left">
        <!--LOGO-->
        <img style="width: 40px; height: 40px;" src="images/img/logo.png" alt="Home Icon" />
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
        <a class="navbar-item-inner flexbox-left" href="news.php">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <!--NEWS-->
            <img style="width: 20px; height: 20px;" src="images/navbar/news.png" alt="Home Icon" />
          </div>
          <span class="link-text">News</span>
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
                <form class="forms_form">
                  <fieldset class="forms_fieldset">
                    <div class="forms_field">
                      <input type="email" placeholder="Email" class="forms_field-input" required autofocus />
                    </div>
                    <div class="forms_field">
                      <input type="password" placeholder="Password" class="forms_field-input" required />
                    </div>
                  </fieldset>
                  <div class="forms_buttons">
                    <button type="button" class="forms_buttons-forgot">Forgot password?</button>
                    <input type="submit" value="Login" class="forms_buttons-action" onclick="login()">
                  </div>
                </form>
              </div>
              <div class="user_forms-signup">
                <h2 class="forms_title">Sign Up</h2>
                <form class="forms_form">
                  <fieldset class="forms_fieldset">
                    <div class="forms_field">
                      <input type="text" placeholder="Full Name" class="forms_field-input" required />
                    </div>
                    <div class="forms_field">
                      <input type="email" placeholder="Email" class="forms_field-input" required />
                    </div>
                    <div class="forms_field">
                      <input type="password" placeholder="Password" class="forms_field-input" required />
                    </div>
                  </fieldset>
                  <div class="forms_buttons">
                    <input type="submit" value="Sign up" class="forms_buttons-action" onclick="signup()">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <main id="main" class="flexbox-col" style="padding: 20px;">
      <div id="account-form" style="display: none; width: 100%; align-items: center;">
        <div id="ain" style="max-width: 60%; margin-left: 20%;">
            <h2 style="text-align: center; color: #ffff;">Lorem ipsum!</h2></br></br></br>
            <div class="typing-text" id="autoType" style="text-align: center; color: #ffff;"></div>

            <script src="scripts/typingtext_index.js"></script><br>

            <img src="images/gif/WallPaper.gif" alt="" class="centered-image"/>
        </div>
      </div>
    </main>
  </main>
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
</script>


</body>
</html>
