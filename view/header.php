<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <title>Corujário</title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->

</head>

<body>
    <nav>
        <a href="index.php" class="image"><img src="../images/soft.png" alt="ícone"></a>
        <ul>
            <!-- <li><a class="nav-link active" aria-current="page" href="index.php">Home</a></li> -->
                <li><a class="nav-link" href="pageDashboard.php">Dashboard</a></li>
                <li><a class="nav-link" href="pageKando.php">KanDO</a></li>
                <li><a class="nav-link" href="pagePomodoro.php">Pomodoro</a></li>
                <li><a class="nav-link" href="pageFatec.php">Fatec</a></li>
                <li><a class="nav-link" href="pagePerfil.php">Perfil</a></li>
        </ul>
    </nav>

    <style>

        img{
            width: 15%;
            margin-left: 35px
        }

        nav {
            background-color: #232946;
            display: flex;
            width: 100%;
            justify-content: space-between;
        }

        ul {
            list-style-type: none;
            display: flex;
            align-items: center;
        }

        nav ul{
            display: flex;
            justify-content: flex-end;
            margin: 5px;
            margin-right: 55px
        }


        /* a {
            display: flex;
            justify-content: flex-start;
            margin: 5px;
        } */

        .image{
            display: flex;
            justify-content: unset;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        /* Responsividade para telas menores */
        @media (max-width: 768px) {
            ul {
                flex-direction: column;
            }
            .nav-link {
                font-size: 1.2rem;
                padding: 12px;
            }
        }

    </style>

</body>
</html>