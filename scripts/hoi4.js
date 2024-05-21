function toggleCollapse() {
    var column = document.getElementById("begginerGuide");
    var forum = document.getElementById("Forum");
    var button = document.getElementById("collapseBegginerGuide");
    var button2 = document.getElementById("decollapseBegginerGuide");

    column.style.display = 'none';
    button.style.display = 'none';
    button2.style.display = 'block';
    forum.style.display = 'block';
}

function deToggleCollapse() {
    var column = document.getElementById("begginerGuide");
    var forum = document.getElementById("Forum");
    var button = document.getElementById("collapseBegginerGuide");
    var button2 = document.getElementById("decollapseBegginerGuide");

    column.style.display = 'block';
    button.style.display = 'block';
    button2.style.display = 'none';
    forum.style.display = 'none';
}

function toggleDiv(id) {
    var divs = document.querySelectorAll('.card-content');
    divs.forEach(function(div) {
      div.style.display = 'none';
    });
    document.getElementById(id).style.display = 'block';
  }

  function updateSlider() {
    var value = document.getElementById('cardRange').value;
    document.getElementById('cardValue').textContent = value;

    var divs = document.querySelectorAll('.card-content');
    divs.forEach(function(div, index) {
      if (index < value) {
        div.style.display = 'block';
      } else {
        div.style.display = 'none';
      }
    });
  }

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