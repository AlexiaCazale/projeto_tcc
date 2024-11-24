<?php
$msg = array('', '', '', '', '');

if($_POST){

		require_once "../model/conexao.class.php";
		require_once "../model/usuario.class.php";
		require_once "../model/usuarioDAO.class.php";

        $erro = false;

        if(empty($_POST["nome"])){
            $msg[0] = "Preencha o campo!";
            $erro = true;
        }
    
        if(strlen($_POST["nome"]) < 2){
            $msg[0] = "Seu nome deve ter no mínimo 2 caracteres";
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
    
        if(empty($_POST["perfil"])){
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
    <div class="image">
        <img src="../images/Sleepy_Owl.gif" alt="sleep owl">
    </div>
    <div class="container">
        <div class="content">
            <div class="cadastro">
            <h1>Cadastre-se</h1>
                <br><br>
                <form method="POST" action="">
                    <div class="flex_row">
                        <label for="nome">Nome: </label>
                        <input type="text" name="nome" id="nome "placeholder="Adicione seu nome" value="<?php echo isset($_POST['nome'])?$_POST['nome']:''?>">
                        <br><br>
                        <div style="color:#f01e2c"><?php echo $msg[0] != ""?$msg[0]:'';?></div> 
                    </div>
                    <br>
                    <div class="flex_row">
                        <label for="email">E-mail: </label>
                        <input type="email" name="email" id="email" placeholder="Adicione seu e-mail" value="<?php echo isset($_POST['email'])?$_POST['email']:''?>">
                        <br><br>
                        <div style="color:#f01e2c"><?php echo $msg[1] != ""?$msg[1]:'';?></div> 
                    </div>
                    <br>
                    <div class="flex_row">
                        <label for="tel">Senha: </label>
                        <input type="password" name="senha" id="senha"  placeholder="Adicione sua senha" value="<?php echo isset($_POST['senha'])?$_POST['senha']:''?>">
                        <br><br>
                        <div style="color:#f01e2c"><?php echo $msg[2] != ""?$msg[2]:'';?></div> 
                    </div>
                    <br>
                    <div class="flex_row">
                        <label for="tel">Telefone: </label>
                        <input type="text" name="telefone" id="tel"  placeholder="Adicione seu telefone" value="<?php echo isset($_POST['telefone'])?$_POST['telefone']:''?>">
                        <br><br>
                        <div style="color:#f01e2c"><?php echo $msg[3] != ""?$msg[3]:'';?></div> 
                    </div>
                    <br>
                    <div class="flex_row">
                        <label for="cadastro">Perfil: </label>
                        <select name="perfil" id="perfil">
                            <option value="">Escolha seu tipo de perfil</option>
                            <option value='Aluno'<?php echo isset($_POST['perfil']) && $_POST['perfil'] == 'Aluno' ? 'selected' : ''; ?>>Aluno</option>
                            <option value='Administrador'<?php echo isset($_POST['perfil']) && $_POST['perfil'] == 'Administrador' ? 'selected' : ''; ?>>Professor</option>        
                        </select>
                        </select>
                        <br><br>
                        <div style="color:#f01e2c"><?php echo $msg[4] != ""?$msg[4]:'';?></div> 
                    </div>
                    <br><br>
                    <p>Já possui conta? Faça <a href="login.php" class="login"><span>Login</span></a>!</p>
                    <button type="submit" class="btn-entrar">Cadastrar</button> &nbsp; &nbsp;
                </form>
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
            float: right;
            padding: 40px;
        }

        .content {
            border-radius: 8px;
            color: black;
            padding: 20px;
            flex-direction: column;
            display: flex;
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


    </style>
</body>
</html>
