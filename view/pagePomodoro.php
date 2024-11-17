<?php
session_start();
    require_once "header.php";
    require_once "footer.php";

    if (!isset($_SESSION['id'])) {
        header("Location: index.php");
        exit();
    }

?>
</body>

<br><br>
    <h1 class="border">Pomodoro</h1>

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
    </style>
</html>