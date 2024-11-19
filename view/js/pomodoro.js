var hrsElem = document.getElementById("hrs");
var minElem = document.getElementById("min");
var segElem = document.getElementById("seg");

var startButton = document.getElementById("start");
var stopButton = document.getElementById("stop");
var resetButton = document.getElementById("reset_time");


var min;

function startTimer () {
    var radioChecked = document.querySelector('input[name="opcao"]:checked');
    if (radioChecked == null) {
        console.log("nenhum tempo selecionado");
    } else if (radioChecked.value == "25-5") {
        
        console.log("timer de 25 min escolhido");

        min = 25;
        seg = 59;

        setInterval(function()
        {
            // min--;
            hrsElem.innerHTML = "00:";
            minElem.innerHTML = `${min}:`; 
            segElem.innerHTML = `${seg}`;
        }, 1000);
        

       // console.log("passou");
        
    } else if (radioChecked.value == "50-10") {
        console.log("timer de 50 min escolhido");
        minElem.innerHTML = "50:"; 
        hrsElem.innerHTML = "00:"; 
        segElem.innerHTML = "00";
        tempo = 50 * 60;
    }
    
    return false;
}