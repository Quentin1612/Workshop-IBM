var diceArray = new Array(6);
for(var i = 1; i < 7; i++) {
    var diceName = "dice-" + i;
    diceArray[i] = document.getElementById(diceName);
}

function getzIndexArray() {
    var diceZindexArray = new Array(6);
    for(var i = 1; i < 7; i++) {
        diceZindexArray[i] = diceArray[i].style.zIndex;
    }

    return diceZindexArray;
}

var timeOut = null;
var cpt = 0;

function launchDiceGame() {
    var cptMin = 20;
    var cptMax = 40;
    var cptToReach = Math.random() * (cptMax - cptMin) + cptMin;

    timeOut = setInterval(function() { diceAnimation(cptToReach); }, 100);
}

function diceAnimation(cptToReach) {
    for(var i = 1; i < 7; i++) {
        var currentzIndex = parseInt(diceArray[i].style.zIndex);
        if(currentzIndex != 6) {
            diceArray[i].style.zIndex = currentzIndex + 1;
        } else {
            diceArray[i].style.zIndex = 1;
        }
    }

    cpt++;
    if(cpt > cptToReach) {
        clearInterval(timeOut);
        displayNewTableLine();
        cpt = 0;
    }
}

function getDisplayedDice() {
    var displayedDiceId = 0;
    var zIndexMax = 0;
    var arrayToCheck = getzIndexArray();

    for(var i = 1; i < arrayToCheck.length; i++) {
        if(arrayToCheck[i] > zIndexMax) {
            displayedDiceId = i;
            zIndexMax = arrayToCheck[i];
        }
    }

    return displayedDiceId;
}

function displayNewTableLine() {
    var result = getDisplayedDice();
    var betCost = 3;
    var betCoinCredit = document.getElementById("betCoinCredit").innerHTML;

    document.getElementById("firstColumn").innerHTML = "1";
    document.getElementById("secondColumn").innerHTML = "3";
    document.getElementById("fourthColumn").innerHTML = result;

    if(result.toString() == betCost.toString()) {
        document.getElementById("fourthColumn").innerHTML += " (Pari gagné)";
    } else {
        document.getElementById("fourthColumn").innerHTML += " (Pari perdu)";
    }
    document.getElementById("result-table").style.display = 'block';
    document.getElementById("finishGame").style.display = 'block';
    document.getElementById("finishGame").style.margin = '1rem 0 0 0';
}