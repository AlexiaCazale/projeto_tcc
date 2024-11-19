var hrsElem = document.getElementById("hrs");
var minElem = document.getElementById("min");
var segElem = document.getElementById("seg");

var startButton = document.getElementById("start");
var stopButton = document.getElementById("stop");
var resetButton = document.getElementById("reset_time");

var intervalo;
var correndo = false;

function startTimer (tt, td) {
    if (correndo) return;
    correndo = true;

    var tTotal = tt * 60.
    var tDescanso = td * 60;

    intervalo = setInterval(() => {
        if (tTotal > 0) {
            tTotal--;
            updateDisplay(tTotal);
        } else if (tTotal === 0) {
            clearInterval(tDescanso);
            var aviso = getElementById("aviso");
            aviso.classList.remove("hidden");
            startIntervalo(tDescanso);
        }
    }, 1000);
}

function startIntervalo (tDescanso) {
    intervalo = setInterval(() => {
        if (tDescanso > 0) {
            tDescanso--;
            updateDisplay(tDescanso);
        } else {
            clearInterval(intervalo);
            correndo = false;
            alert("Hora de voltar ao trabalho!");
        }
    }, 1000);
}

function updateDisplay(tseg) {
    const hrs = Math.floor(tseg / 3600);
    const min = Math.floor((tseg % 3600) / 60);
    const seg = tseg % 60;

    hrsElem.textContent = hrs > 0 ? `${String(hrs).padStart(2, '0')}:` : "";
    minElem.textContent = `${String(min).padStart(2, '0')}:`;
    segElem.textContent = String(seg).padStart(2, '0');
}

function stopTimer() {
    clearInterval(intervalo);
    correndo = false;
}

function resetTimer() {
    stopTimer();
    hrsElem.textContent = "00:";
    minElem.textContent = "00:";
    segElem.textContent = "00";
}

startButton.addEventListener("click", () => {
    const selectedOption = document.querySelector('input[name="timer-option"]:checked').value;
    if (selectedOption === "25-5") {
        startTimer(25, 5);
    } else if (selectedOption === "50-10") {
        startTimer(50, 10);
    } else {
        alert("Selecione um tempo válido.");
    }
});

stopButton.addEventListener("click", stopTimer());
resetButton.addEventListener("click", resetTimer());