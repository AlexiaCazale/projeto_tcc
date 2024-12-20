<?php
session_start();
$msg = array('', '', '');

if($_POST){

		require_once "../Model/conexao.class.php";
		require_once "../Model/usuario.class.php";
		require_once "../Model/DAO/usuarioDAO.class.php";

        $erro = false;

        if(empty($_POST["email"])){
            $msg[0] = "Preencha o campo!";
            $erro = true;
        }
    
        if(empty($_POST["senha"])){
            $msg[1] = "Preencha o campo!";
            $erro = true;
        }

		
		if(!$erro)
		{
			//verificar no BD
			$usuario = new Usuario(email:$_POST["email"], senha:md5($_POST["senha"]));
			
			$usuarioDAO = new usuarioDAO();
			$retorno = $usuarioDAO -> login($usuario);
			
			if(count($retorno) == 1)
			{
				//encontrou
				
				$_SESSION["id"] = $retorno[0]->idusuario;
				$_SESSION["nome"] = $retorno[0]->nome;
				$_SESSION["telefone"] = $retorno[0]->telefone;
				$_SESSION["email"] = $retorno[0]->email;
				$_SESSION["senha"] = $retorno[0]->senha;
				$_SESSION["perfil"] = $retorno[0]->perfil;
				
				header("location:index.php");
				die();
			}
			else
			{
				//não encontrou
				$msg[2] = "Verifique os dados informados";
			}

		}
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
        
    <div class="image">
        <img src="../src/images/Sleepy_Owl.gif" alt="sleep owl">
    </div>
    <div class="container">
        <div class="content">
            <div class="login">
                <h1>Faça login!</h1>
                <form method="POST" action="">
                    <label for="email">E-mail: </label>
                    <input type="email" name="email">
                    <div style="color:#f01e2c"><?php echo $msg[0] != ""?$msg[0]:'';?></div>

                    <label for="senha">Senha: </label>
                    <input type="password" name="senha">
                    <div style="color:#f01e2c"><?php echo $msg[1] != ""?$msg[1]:'';?></div> 
                    <?php 
                        if($msg[2] != "")
                        {
                            echo "<div style='color:#f01e2c' class='alert alert-danger' role='alert'>{$msg[2]}</div>";
                            
                        }
                    ?>
                    <br><br>
                    <p>Não possui conta? Faça <a href="cadastro.php" class="login"><span>Cadastro</span></a>!</p>
                    <button type="submit" class="btn-entrar">Entrar</button> &nbsp; &nbsp;
            </div>
        </div>
    </div>

    <style>

        body {
            width: 100%;
            height: 100vh;
            display: flex;
        }

        span {
            color: #F2E0A6;
        }

        .white_font {
            color: white;
        }
        
        button a {
            color: #232946;
        }

        a {
            color: #F2E0A6;
        }

        h1{
            color: white;
            text-align: center;
            font-family: "Krona One", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        p, .login{
            color: white;
            text-transform: none;
            margin-bottom: 5px;
        }

        a{
            color: black;
        }
        
        .container{
            display: flex;
            width: 100%;
            justify-content: center;
            background-color: #232946;
            width: 50%;
            float: right;
            padding: 40px;
        }

        .content {
            display: flex;
            width: 100%;
            justify-content: center;
            border-radius: 8px;
            color: black;
            padding: 20px;
            flex-direction: column;
            display: flex;
        }

        .image {
            width: 50%;
            float: left;
            display: flex;
            align-items: center;
            justify-content: center;
         }

         .image img {
            width: 480px;
        }

        label {
            color: white;
            display: block;
            margin-top: 15px;
            font-size: 22px;
        }

        input{
            margin-top: 5px;
            border: 1px solid #bbb;
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }

        .btn-entrar{
            width: 100%;
            background-color: #F2E0A6;
            color: #000;
         }


    </style>
</body>
</html>