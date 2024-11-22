<?php

session_start();
require_once "header.php";
require_once "../model/conexao.class.php";
require_once "../model/blocosDAO.class.php";
require_once "../model/cursoDAO.class.php";
require_once "../model/petDAO.class.php";

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

?>
    <br><br>
    <h1 class="border">Fatec Jahu</h1>
    <br><br>
    <div class="container">
        <div class="content center">
            <h2 class="border">Cursos</h2>
            <br>
            <div class="infos ">
                <div class="cursos">
                    <h3 class="title">Selecione um curso: </h3>
                    <br>
                    <input type="radio" name="sistemas-para-internet" value="1">
                    <label for="sistemas-para-internet">Construção Naval</label> <br>
                    <input type="radio" name="sistemas-para-internet" value="2">
                    <label for="sistemas-para-internet">Gestão da Produção Industrial</label><br>
                    <input type="radio" name="sistemas-para-internet" value="3">
                    <label for="sistemas-para-internet">Gestão Empresarial</label><br>
                    <input type="radio" name="sistemas-para-internet" value="4">
                    <label for="sistemas-para-internet">Meio Ambiente e Recursos Hídricos</label><br>
                    <input type="radio" name="sistemas-para-internet" value="5">
                    <label for="sistemas-para-internet">Sistemas para Internet</label><br>
                    <input type="radio" name="sistemas-para-internet" value="6">
                    <label for="sistemas-para-internet">Desenvolvimento de Software Multiplataforma</label><br>
                    <input type="radio" name="sistemas-para-internet" value="7">
                    <label for="sistemas-para-internet">Gestão da Tecnologia da Informação</label><br>
                    <input type="radio" name="sistemas-para-internet" value="8">
                    <label for="sistemas-para-internet">Logística</label><br>
                    <input type="radio" name="sistemas-para-internet" value="9">
                    <label for="sistemas-para-internet">Sistemas Navais</label><br>
                </div>
            </div>
            <button class="center">Buscar grade</button>
        </div>
        <br><br>
        <div class="content">
        <form class="form-control" action="#" method="POST" enctype="multipart/form-data">
            <h2 class="border">Blocos</h2>
            <br><br>
            <img src="../img-imported/<?php $bloco->imagem; ?>" alt="imagem">
        </form>
            <br>
        </div>

        <br><br>

        <div class="content">
            <form class="form-control" action="#" method="POST" enctype="multipart/form-data">
                <h2 class="border">Pets</h2>
                <br><br>
                <?php 
                $petDAO = new petDAO();
                $pet = $petDAO->buscar_todos();
                ?>
                <img src="../img-imported/<?php $pet->imagem; ?>" alt="imagem">
            </form>
            <br>
        </div>
    </div>
        
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

        .center {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            flex-direction: flex_colunm;
        }

        .border{
            background-color: #1b2238;
            padding: 15px;
            border-radius: 8px;
            margin: 0 35%;
            display: flex;
            justify-content: center;
            color: white;
        }

        button, .form-label{
            background-color: #F2E0A6;
            font-weight: 700;
            font-size: 15px;
            padding: 10px;
            border-radius: 6px;
            color: black;
        }

        .btn-center{
            display: flex;
            justify-content: center;
        }

        .content{
            background-color: #1b2238;
            padding: 15px;
            border-radius: 8px;
            margin: 0 15%;
        }

        .infos, .title{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: flex_colunm;
            text-align: center;
            color: white;
        }

        .cursos{
            width: 50%;
            text-align: justify;
        }

        input, label{
            padding: 5px;
            margin-bottom: 10px;
        }

        .disciplinas{
            width: 50%;
        }

    </style>

    <?php require_once "footer.php"; ?>
</body>
</html>
