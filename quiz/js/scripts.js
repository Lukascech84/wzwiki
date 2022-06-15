const questions = [
    ["Jak se jmenuje hra o které jsem dělal stránku?", "Warzone"],
    ["Které studio vytvořilo hru CoD: Warzone?", "Infinity ward"],
    ["Do jakého místa se dostaneš po první smrti?", "Gulag"],
    ["Jak se jmenovala původní mapa ve CoD: Warzone?", "Verdansk"],
    ["Ve které hře v sérii CoD byl první mód na styl Battle Royale?", "Black Ops 4"]
];
var questionNo = 1;
var score = 0;

function clickButton() {
    check();
    questions.shift();
    questionNo++;
    setup();

}

function setup() {
    if (questions.length != 0) {
        document.getElementById("question").innerHTML = questions[0][0];
        document.getElementById("questionNo").innerHTML = "Otázka: " + questionNo;
    } else {
        document.getElementById("questionNo").innerHTML = 'Hotovo! <br> Klikni zde pro <a class="odpovedi" href="./odpovedi.html">Odpovědi</a>';
        document.getElementById("question").innerHTML = "Tvoje skóre je: " + score;
        document.getElementById("text-field").remove();
        document.getElementById("button").remove();
    }
}

function check() {
    if (document.getElementById("text-field").value == questions[0][1]) {
        score++;
        document.getElementById("text-field").value = "";
    }
    else{
    document.getElementById("text-field").value = "";
}
}