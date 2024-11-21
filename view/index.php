<?php
    require_once "header.php";
?>

<div class="container">
    <div class="image">
        <img src="" alt="">
    </div>
    <div class="bem-vindo">
        <h1>Bem-vindo(a)!</h1>
        <div class="img-center">
            <img src="../images/dark.png" alt="ícone">
        </div/>
         <h3 class="center">Organize<span> &nbsp; seus estudos  &nbsp; </span>de maneira rápida e prática onde estiver!</h3>
    </div>

    <br><br>
    <div class="btn-center">
        <?php
            if(!isset($_SESSION["id"])){
                echo '<button class="btn-entrar"><a href="login.php">Entrar</a></button> &nbsp; &nbsp;';
                echo '<button class="btn-cadastrar"><a href="cadastro.php">Cadastrar</a></button>';
            }else{
                echo '<button class="btn-center green"><a href="pageDashboard.php">Veja seu progresso +</a></button>';
            }
        ?>

    </div>
</div>

<style>

    .container{
        margin-top: 10%;
        /* margin-left: 50%; */
    }

    .center {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .green{
        color: white;
        background-color: green;
    }

    a{
        color: white;
    }

    h3{
        color: white;
    }

    h1{
        text-align: center;
        font-family: "Krona One", sans-serif;
        font-weight: 400;
        font-style: normal;
        color: white;
    }

    span{
        color: #232946;
        font-weight: bold;
    }

    img{
        width: 15%;
    }

    .btn-center, .img-center{
        display: flex;
        justify-content: center;
    }

    .btn-entrar{
        width: 15%;
        background-color: #F2E0A6;
        border-radius: 6px;
        /* margin-left: 30%; */
    }

    .btn-entrar a{
        color: #000;
    }

    .btn-cadastrar{
        width: 15%;
        background-color: #232946;
        color: #ffff;
        border-radius: 6px;
    }

    .btn-cadastrar a{
        color: #ffff;
    }

</style>
<br><br><br><br><br><br>
</body>
</html>
<?php require_once "footer.php"; ?>