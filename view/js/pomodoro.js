var hrsElem = document.getElementById("hrs");
var minElem = document.getElementById("min");
var segElem = document.getElementById("seg");

var startButton = document.getElementById("start");
var stopButton = document.getElementById("stop");
var resetButton = document.getElementById("reset_time");

var bichinho1 = document.getElementById("aviso1");
var bichinho2 = document.getElementById("aviso2");
var lembrete1 = document.getElementById("lembrete1");
var lembrete2 = document.getElementById("lembrete2");

var min;
var seg; 
var minAtual;
var segAtual; 
var timerInterval;
var descansoInterval;

function startTimer() {
    if(!bichinho1.classList.contains('hidden'))
        bichinho1.classList.add('hidden');
        bichinho2.classList.remove('hidden');
    var radioChecked = document.querySelector('input[name="opcao"]:checked');
    if (radioChecked == null) {
        console.log("nenhum tempo selecionado");
        bichinho2.classList.add("hidden");
        lembrete1.classList.remove("hidden");
        return;
    } else if (radioChecked.value == "25-5") {
        console.log("timer de 25 min escolhido");
        lembrete1.classList.add("hidden");
        lembrete2.classList.add("hidden");
        criarTimer(25, 0, 5, 0);
    } else if (radioChecked.value == "50-10") {
        console.log("timer de 50 min escolhido");
        lembrete1.classList.add("hidden");
        lembrete2.classList.add("hidden");
        criarTimer(50, 0, 10, 0);
    }
}

function criarTimer(min, seg, minSecundario, segSecundario) {
    minAtual = min;
    segAtual = seg;
    minElem.innerHTML = minAtual >= 10 ? minAtual : `0${minAtual}`;
    segElem.innerHTML = segAtual >= 10 ? `${segAtual}` : `0${segAtual}`;

    startButton.disabled = true;

    timerInterval = setInterval(function() {
        if(segAtual > 0) {
            segAtual --;
            segElem.innerHTML = segAtual >= 10 ? `${segAtual}` : `0${segAtual}`;
            return;
        }
        if(minAtual > 0) {
            minAtual--;
            segAtual = 59;
            minElem.innerHTML = minAtual >= 10 ? minAtual : `0${minAtual}`;
            segElem.innerHTML = segAtual >= 10 ? `${segAtual}` : `0${segAtual}`;
        } else {
            clearInterval(timerInterval);
            if(bichinho1.classList.contains('hidden')) {
                console.log('Descanso!');
                bichinho1.classList.remove('hidden');
                bichinho2.classList.add('hidden')
            } else {
                console.log("Estudo!");
                bichinho1.classList.add("hidden");
                bichinho2.classList.remove("hidden");
            }
            criarTimer(minSecundario, segSecundario, min, seg);
        }
    }, 1000);
}

function stopTimer() {
    clearInterval(timerInterval);
    clearInterval(descansoInterval);
    console.log("Timer parado.");
    lembrete2.classList.remove("hidden");
    startButton.textContent = "Continuar";
    startButton.disabled = false;
}


function resetTimer() {
    clearInterval(timerInterval);
    clearInterval(descansoInterval);
    hrsElem.innerHTML = "00";
    minElem.innerHTML = "00";
    segElem.innerHTML = "00";
    startButton.disabled = false;
    lembrete1.classList.add("hidden");
    lembrete2.classList.add("hidden");
    bichinho1.classList.add("hidden");
    bichinho2.classList.add("hidden");
    startButton.textContent = "Iniciar";
    console.log("Timer reiniciado.");
}
