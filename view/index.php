<?php
    require_once "header.php";
    require_once "footer.php";
?>

<div class="container">
    <div class="image">
        <img src="" alt="">
    </div>
    <div class="bem-vindo">
        <h1>Bem-vindo(a)!</h1>
        <img src="" alt="">
         <h3 class="center">Organize<span> &nbsp; seus estudos  &nbsp; </span>de maneira rápida e prática onde estiver!</h3>
    </div>

    <br><br>

    <button class="btn-entrar"><a href="login.php">Entrar</a></button> &nbsp; &nbsp;
    <button class="btn-cadastrar"><a href="cadastro.php">Cadastrar</a></button>
</div>

<style>

    .container{
        margin-top: 250px;
        /* margin-left: 50%; */
    }

    .center {
        display: flex;
        justify-content: center;
        align-items: center;
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

    .btn-entrar{
        background-color: #F2E0A6;
        border-radius: 6px;
        margin-left: 30%;
    }

    .btn-entrar a{
        color: #000;
    }

    .btn-cadastrar{
        background-color: #232946;
        color: #ffff;
        border-radius: 6px;
    }

    .btn-cadastrar a{
        color: #ffff;
    }

</style>

</body>
</html>