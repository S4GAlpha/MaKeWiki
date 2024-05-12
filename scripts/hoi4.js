function toggleCollapse() {
    var column = document.getElementById("begginerGuide");
    var forum = document.getElementById("forum");
    var button = document.getElementById("collapseBegginerGuide");
    var button2 = document.getElementById("decollapseBegginerGuide");

    column.style.display = 'none';
    button.style.display = 'none';
    button2.style.display = 'block';
    forum.style.display = 'block';
}

function deToggleCollapse() {
    var column = document.getElementById("begginerGuide");
    var forum = document.getElementById("forum");
    var button = document.getElementById("collapseBegginerGuide");
    var button2 = document.getElementById("decollapseBegginerGuide");

    column.style.display = 'block';
    button.style.display = 'block';
    button2.style.display = 'none';
    forum.style.display = 'none';
}


function toggleDivision() {
    var column = document.getElementById("division");
    var forum = document.getElementById("tatics");
    var button = document.getElementById("collapseDivision");
    var button2 = document.getElementById("collapseTactic");

    column.style.display = 'none';
    button.style.display = 'none';
    button2.style.display = 'block';
    forum.style.display = 'block';
}

function toggleTactics() {
    var column = document.getElementById("division");
    var forum = document.getElementById("tatics");
    var button = document.getElementById("collapseDivision");
    var button2 = document.getElementById("collapseTactic");

    column.style.display = 'block';
    button.style.display = 'block';
    button2.style.display = 'none';
    forum.style.display = 'none';
}
