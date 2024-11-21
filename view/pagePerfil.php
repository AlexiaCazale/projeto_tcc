<?php
    session_start();
    
    require_once "header.php";
    require_once "../model/conexao.class.php";
    require_once "../model/usuarioDAO.class.php";
    require_once "../model/usuario.class.php";

    
    if (!isset($_SESSION['id'])) {
        header("Location: index.php");
        exit();
    }
    //var_dump($_SESSION)
?>

<br><br>

<h1 class="border">Perfil</h1>
<br><br>

<div class="container">
    
    <div class="content">
        <h2 class="title">Altere seus dados</h2>
        <label for="foto">Foto de perfil:</label>
        <div class="photo">
            <img src="../img/profile-picture.webp" class="profile-foto" alt="add-foto"> 
            <i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i>            <!-- <div class="btn-center">
                <a href="alterarPerfil.php" class="btn-alterar">Alterar foto</a> &nbsp; &nbsp;
            </div> -->
        </div>
        <br>
        <label for="nome">Nome: </label>
        <?php
            echo "<button class='info' readonly>";
            echo "<b>" . $_SESSION["nome"] . "</b>";
            echo "</button> <br>";
        ?>
        <br>

        <label for="telefone">Telefone: </label>
        <?php
             echo "<button class='info' readonly>";
             echo "<b>" . $_SESSION["telefone"] . "</b>";
             echo "</button> <br>";
        ?>
        <br>

        <label for="email">Email: </label>
        <?php
            echo "<button class='info' readonly>";
            echo "<b>" . $_SESSION["email"] . "</b>";
            echo "</button> <br>";
        ?>
        <br>

        <label for="senha">Perfil: </label>
        <?php
            echo "<button class='info' readonly>";
            echo "<b>" . $_SESSION["perfil"] . "</b>";
            echo "</button> <br>";
        ?>
        <br>

        <label for="senha">Senha: </label>
        <?php
            echo "<button class='info' readonly>";
            echo "<b>" . $_SESSION["senha"] . "</b>";
            echo "</button> <br>";
        ?>
        <br><br>

        <div class="btn-center">
            <a href="alterarPerfil.php" class="btn-alterar">Alterar</a> &nbsp; &nbsp;
            <a href="logout.php" class="btn-apagar">Sair</a>
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

        .profile-foto{
            margin-top: 15px;
            border-radius: 50%;
            height: 150px;
            width: auto;
        }

        .photo{
            display: grid;
            justify-content: center;
            align-items: center;
        }

        .photo i{
            font-size: 25px;
            justify-self: right;
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

        input, .info{
            margin-top: 5px;
            border: 1px solid #bbb;
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }

        .info{
            cursor: auto;
            background-color: white;
            text-align: start;
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

        .btn-apagar{
            background-color: red;
            color: white;
            font-size: 20px;
            padding: 10px;
            border-radius: 6px;
            text-decoration: none;
            width: 105px;
            text-align: center;
        }

        .btn-center{
            display: flex;
            justify-content: center;
        }

        .btn-alterar{
            background-color: #F2E0A6;
            font-size: 20px;
            padding: 10px;
            border-radius: 6px;
            color: black;
            width: 105px;
            text-align: center;
        }

</style>

</body>
</html>
<?php require_once "footer.php"; ?>