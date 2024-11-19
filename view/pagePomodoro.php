<?php
session_start();
    require_once "header.php";
    require_once "footer.php";

    // if (!isset($_SESSION['id'])) {
    //     header("Location: index.php");
    //     exit();
    // }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style_pomodoro.css">
    </head>
    <body> 
        <br><br>
        <h1 class="border">Pomodoro</h1>
        <br><br>
        <div class="timer">
            <div class="time" id="hrs">00:</div>
            <div class="time" id="min">00:</div>
            <div class="time" id="seg">00</div>
        </div>
        <div class="select_timer">
            <p>Selecione o tempo:</p>
            <form id="timer-form" class="timer_options">
                <div class="container">
                    <label for="temp1" class="timer_option">
                    <input type="radio" name="opcao" value="25-5" id="temp1"> 
                    25 min - 5 min
                    </label>
                    <label for="temp2" class="timer_option">
                    <input type="radio" name="opcao" value="50-10" id="temp2">  
                    50 min - 10 min
                </div>
                <div class="button_pomodoro">
                    <button type="button" id="start" onclick="startTimer()">Iniciar</button>
                    <button id="stop">Parar</button>
                    <button id="reset_time">Reiniciar</button>
                </div>
            </form>
            <br>
            <div id="aviso" class="hidden">
                <div class="aviso">
                    <p>Hora do descanso!</p>
                    <img src="../images/Sleepy_Owl.gif" alt="sleep owl">
                </div>
            </div>
        </div>
        <script src="js/pomodoro.js"></script>
    </body>
</html>