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

function toggleFirst() {
  var first = document.getElementById("first");
  var second = document.getElementById("second");
  var third = document.getElementById("third");
  var four = document.getElementById("four");
  var button = document.getElementById("collapseFirst");
  var button2 = document.getElementById("collapseSecond");
  var button3 = document.getElementById("collapseThird");

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
