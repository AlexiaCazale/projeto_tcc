<?php
session_start();
$msg = array('', '', '', '');

if($_POST){

		require_once "../model/conexao.class.php";
		require_once "../model/usuario.class.php";
		require_once "../model/usuarioDAO.class.php";

        $erro = false;

        if(empty($_POST["nome"])){
            $msg[0] = "Preencha o campo!";
            $erro = true;
        }
    
        if(strlen($_POST["nome"]) < 7){
            $msg[0] = "Seu nome deve ter no mínimo 7 caracteres";
            $erro = true;
        }
    
        if(empty($_POST["email"])){
            $msg[1] = "Preencha o campo!";
            $erro = true;
        }
    
        if(empty($_POST["senha"])){
            $msg[2] = "Preencha o campo!";
            $erro = true;
        }
    
        if(empty($_POST["telefone"])){
            $msg[3] = "Preencha o campo!";
            $erro = true;
        }
    
        if($_POST["perfil"] = ""){
            $msg[4] = "Selecione uma opção!";
            $erro = true;
        }    
		
		if(!$erro)
		{
			//verificar no BD
			$usuario = new Usuario(nome:$_POST["nome"], email:$_POST["email"], senha:md5($_POST["senha"]), telefone:$_POST["telefone"], perfil:$_POST["perfil"]);
			
			$usuarioDAO = new usuarioDAO();
			$retorno = $usuarioDAO -> cadastrar($usuario);

            header("location:login.php?mensagem=$retorno");
            die();
            
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
                        <input type="text" name="nome" id="nome "placeholder="Adicione seu nome" value="<?php echo isset($_POST['nome'])?$_POST['nome']:''?>">
                        <div style="color:white"><?php echo $msg[0] != ""?$msg[0]:'';?></div> 
                    </div>
                    <br>
                    <div class="flex_row">
                        <label for="email">E-mail: </label>
                        <input type="email" name="email" id="email" placeholder="Adicione seu e-mail" value="<?php echo isset($_POST['email'])?$_POST['email']:''?>">
                        <div style="color:white"><?php echo $msg[1] != ""?$msg[1]:'';?></div> 
                    </div>
                    <br>
                    <div class="flex_row">
                        <label for="tel">Senha: </label>
                        <input type="password" name="senha" id="senha"  placeholder="Adicione sua senha" value="<?php echo isset($_POST['senha'])?$_POST['senha']:''?>">
                        <div style="color:white"><?php echo $msg[2] != ""?$msg[2]:'';?></div> 
                    </div>
                    <br>
                    <div class="flex_row">
                        <label for="tel">Telefone: </label>
                        <input type="text" name="telefone" id="tel"  placeholder="Adicione seu telefone" value="<?php echo isset($_POST['telefone'])?$_POST['telefone']:''?>">
                        <div style="color:white"><?php echo $msg[3] != ""?$msg[3]:'';?></div> 
                    </div>
                    <br>
                    <div class="flex_row">
                        <label for="cadastro">Perfil: </label>
                        <select name="perfil" id="perfil" value="<?php echo isset($_POST['perfil'])?$_POST['perfil']:''?>">
                            <option value="">Escolha seu tipo de perfil</option>
                            <option value="aluno">Aluno</option>
                            <option value="administrador">Professor</option>        
                        </select>
                        <div style="color:white"><?php echo $msg[4] != ""?$msg[4]:'';?></div> 
                    </div>
                    <br><br>
                    <p>Já possui conta? Faça <a href="login.php" class="login">Login</a>!</p>
                    <button type="submit" class="btn-entrar">Cadastrar</button> &nbsp; &nbsp;
                </form>
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
