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
        <style>
            h1{
                font-size: 40px;
                text-align: center;
                /* font-family: "Krona One", sans-serif; */
                font-weight: 800;
                font-style: normal;
                color: white;
                text-transform: uppercase;
            }

            .border{
                background-color: #1b2238;
                padding: 15px;
                border-radius: 8px;
                margin: 0 35%;
                display: flex;
                justify-content: center;
            }
            
            .timer {
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                font-size: 2.5em;
                color: #fff;
                margin: 0 35%;
                padding: 40px;
                /* From https://css.glass */
                background: rgba(255, 255, 255, 0.05);
                border-radius: 16px;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                backdrop-filter: blur(7.4px);
                -webkit-backdrop-filter: blur(7.4px);
            }
        </style>
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
            
        </div>
    </body>
</html>