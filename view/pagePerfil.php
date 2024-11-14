<?php
    require_once "header.php";
    require_once "footer.php";
?>

<br><br>

<h1 class="border">Perfil</h1>
<br><br>

<div class="container">
    
    <div class="content">
        <h2 class="title">Altere seus dados</h2>
        <label for="nome">Nome: </label>
        <input type="text" readonly>
        <br>

        <label for="nome">Telefone: </label>
        <input type="text" readonly>
        <br>

        <label for="nome">Email: </label>
        <input type="text" readonly>
        <br>

        <label for="nome">Senha: </label>
        <input type="text" readonly>
        <br><br><br>

        <div class="btn-center">
                <a href="alterarPerfil.php"><button>Alterar</button></a> &nbsp; &nbsp;
        </div>
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

        .title{
            color: white;
            text-align: center;
        }

        .container{
            display:flex;
            justify-content: center;
        }

        .content{
            background-color: #1b2238;
            padding: 30px 60px 30px 60px;
            border-radius: 8px;
            margin: 0 15%;
            width: 1000px;
        }

        label {
            color: white;
            display: block;
            margin-top: 15px;
            font-size: 18px;
            
        }

        input{
            margin-top: 5px;
            border: 1px solid #bbb;
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }

        .border{
            background-color: #1b2238;
            padding: 15px;
            border-radius: 8px;
            margin: 0 35%;
            display: flex;
            justify-content: center;
        }

        
        button{
            background-color: #F2E0A6;
            font-size: 15px;
            padding: 10px;
            border-radius: 6px;
            color: black;
        }

        .btn-center{
            display: flex;
            justify-content: center;
        }

</style>

</body>
</html>