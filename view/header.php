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
    <!-- <nav class="navbar navbar-expand-lg border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pageFatec.php">Fatec</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pagePomodoro.php">Pomodoro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pageKando.php">KanDO </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pageDashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pagePerfil.php">Perfil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    <nav>
        <ul>
           <li><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
            <li><a class="nav-link" href="pageFatec.php">Fatec</a></li>
            <li><a class="nav-link" href="pagePomodoro.php">Pomodoro</a></li>
            <li><a class="nav-link" href="pageKando.php">KanDO</a></li>
            <li><a class="nav-link" href="pageDashboard.php">Dashboard</a></li>
            <li><a class="nav-link" href="pagePerfil.php">Perfil</a></li>
        </ul>
    </nav>

    <style>

    /* body{
        background: linear-gradient(90deg, #232946, #B8C1EC);
    } */

    /* Estilos gerais da navbar */
        nav {
            background-color: #232946;
            /* padding: 10px 20px; */
        }

        ul {
            list-style-type: none;
            display: flex;
            align-items: center;
        }

        li {
            margin: 5px;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        /* .nav-link:hover {
            background-color: #3e8e41; /* Sutil alteração no hover */
        } */

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