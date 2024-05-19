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


function toggleFirst() {
    var first = document.getElementById("first");
    var second = document.getElementById("second");
    var third = document.getElementById("third");
    var four = document.getElementById("four");
    var button = document.getElementById("collapseFirst");
    var button2 = document.getElementById("collapseSecond");
    var button3 = document.getElementById("collapseThird");
    var button4 = document.getElementById("collapseFour");

    first.style.display = 'block';
    second.style.display = 'none';
    third.style.display = 'none';
    four.style.display = 'none';

    button.classList.add('dark');
    button2.classList.remove('dark');
    button3.classList.remove('dark');
    button4.classList.remove('dark');
}

function toggleSecond() {
    var first = document.getElementById("first");
    var second = document.getElementById("second");
    var third = document.getElementById("third");
    var four = document.getElementById("four");
    var button = document.getElementById("collapseFirst");
    var button2 = document.getElementById("collapseSecond");
    var button3 = document.getElementById("collapseThird");
    var button4 = document.getElementById("collapseFour");

    first.style.display = 'none';
    second.style.display = 'block';
    third.style.display = 'none';
    four.style.display = 'none';

    button.classList.remove('dark');
    button2.classList.add('dark');
    button3.classList.remove('dark');
    button4.classList.remove('dark');
}

function toggleThird() {
    var first = document.getElementById("first");
    var second = document.getElementById("second");
    var third = document.getElementById("third");
    var four = document.getElementById("four");
    var button = document.getElementById("collapseFirst");
    var button2 = document.getElementById("collapseSecond");
    var button3 = document.getElementById("collapseThird");
    var button4 = document.getElementById("collapseFour");

    first.style.display = 'none';
    second.style.display = 'none';
    third.style.display = 'block';
    four.style.display = 'none';

    button.classList.remove('dark');
    button2.classList.remove('dark');
    button3.classList.add('dark');
    button4.classList.remove('dark');
}

function toggleFour() {
    var first = document.getElementById("first");
    var second = document.getElementById("second");
    var third = document.getElementById("third");
    var four = document.getElementById("four");
    var button = document.getElementById("collapseFirst");
    var button2 = document.getElementById("collapseSecond");
    var button3 = document.getElementById("collapseThird");
    var button4 = document.getElementById("collapseFour");

    first.style.display = 'none';
    second.style.display = 'none';
    third.style.display = 'none';
    four.style.display = 'block';

    button.classList.remove('dark');
    button2.classList.remove('dark');
    button3.classList.remove('dark');
    button4.classList.add('dark');
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