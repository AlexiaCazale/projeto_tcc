<?php
session_start();
$msg = array('', '', '', '');

if($_POST)
	{
		require_once "../models/conexao.class.php";
		require_once "../models/usuario.class.php";
		require_once "../models/usuarioDAO.class.php";
		
		$erro = false;
		

		if(!$erro)
		{
			//verificar no BD
			$usuario = new Usuario(nome:$_POST["nome"], email:$_POST["email"], senha:md5($_POST["senha"]), telefone:$_POST["telefone"], perfil:$_POST["perfil"]);
			
			$usuarioDAO = new usuarioDAO();
			$retorno = $usuarioDAO -> cadastrar($usuario);

            header("location:cadastro.php?mensagem=$retorno");
            die();
			
			// if(count($retorno) == 1)
			// {
			// 	//encontrou
				
			// 	$_SESSION["id"] = $retorno[0]->idusuario;
			// 	$_SESSION["nome"] = $retorno[0]->nome;
			// 	$_SESSION["perfil"] = $retorno[0]->perfil;
				
			// 	header("location:index.php");
			// 	die();
			// }
			// else
			// {
			// 	//não encontrou
			// 	$msg[2] = "Verifique os dados informados";
			// }
			
		}
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="image">

            </div>
            <div class="cadastro">
            <h1>Cadastre-se</h1>
                <br><br>
                <form method="POST" action="">
                    <div class="flex_row">
                        <label for="nome">Nome: </label>
                        <input type="text" name="nome" id="nome" required>
                    </div>
                    <br>
                    <div class="flex_row">
                        <label for="email">E-mail: </label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <br>
                    <div class="flex_row">
                        <label for="tel">Telefone: </label>
                        <input type="text" name="telefone" id="tel" required>
                    </div>
                    <br>
                    <!-- <div class="flex_row">
                        <label for="cadastro">Data de Cadastro: </label>
                        <input type="date" name="data_cadastro" id="cadastro" required>
                    </div> -->
                    <div class="flex_row">
                        <label for="cadastro">Perfil: </label>
                        <select name="perfil" id="perfil" required>
                            <option value="">Escolha seu tipo de perfil</option>
                            <option value="aluno">Aluno</option>
                            <option value="professor">Professor</option>        
                        </select>
                    </div>
                </form>
                <br><br>
                <p>Já possui conta? Faça <a href="login.php" class="login">Login</a>!</p>
                <button class="btn-entrar"><a href="index.php">Cadastrar</a></button> &nbsp; &nbsp;
            </div>
        </div>
    </div>

    <style>

        p, .login{
            color: white;
            text-transform: none;
            margin-bottom: 5px;
        }

        a{
            color: black;
        }

        h1{
            color: white;
            text-align: center;
            font-family: "Krona One", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
        
        .container{
            background-color: #232946;
            width: 50%;
            flex-direction: column;
            margin-left: 50%;
            display: flex;
            position: fixed;
            height: -webkit-fill-available;
        }

        .content{
            border-radius: 8px;
            color: black;
            padding: 20px;
            flex-direction: column;
            display: flex;
            justify-content: space-between;
            margin: 115px;
            margin-bottom: 90px;
        }

        label {
            color: white;
            display: block;
            margin-top: 15px;
            font-size: 22px;
            
        }

        input, select{
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
