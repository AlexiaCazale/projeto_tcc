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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Corujário</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
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
                        <a class="nav-link" aria-current="page" href="listarcategorias.php">Fatec</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="listarprodutos.php">Pomodoro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="listarcategorias.php">KanDO </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="listarprodutos.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="listarprodutos.php">Perfil</a>
                    </li>
                    <?php
                        if(!isset($_SESSION["id"])){
                            echo "<li class='nav-item'><a class='nav-link' aria-current='page' href='login.php'>Login</a></li>";
                        }else{
                            echo '<li class="nav-item"><a class="nav-link" aria-current="page" href="logout.php">Logout</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>