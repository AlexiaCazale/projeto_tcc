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

        min = 24;
        seg = 59;
        minElem.innerHTML = '24:';
        segElem.innerHTML = '59';

        setInterval(function()
        {
            min--;
            hrsElem.innerHTML = "00:";
            minElem.innerHTML = `${min}:`; 
        }, 60000);

        setInterval(function()
        {
            seg--;
            segElem.innerHTML = `${seg}`;

            if (seg <= 0) {
                seg = 60;
                // seg--;
            }
    
        }, 1000);
        

       // console.log("passou");
        
    } else if (radioChecked.value == "50-10") {
        console.log("timer de 50 min escolhido");

        min = 49;
        seg = 59;
        minElem.innerHTML = '49:';
        segElem.innerHTML = '59';


        setInterval(function()
        {
            min--;
            hrsElem.innerHTML = "00:";
            minElem.innerHTML = `${min}:`; 
        }, 60000);

        setInterval(function()
        {
            seg--;
            segElem.innerHTML = `${seg}`;

            if (seg <= 0) {
                seg = 60;
                // seg--;
            }
    
        }, 1000);
    }
    
    return false;
}

function stopTimer(){
    clearInterval();
    document.getElementById('stop').disabled = false;
}

function resetTimer(){
    hor = 0;
    min = 0;
    seg = 0;
}