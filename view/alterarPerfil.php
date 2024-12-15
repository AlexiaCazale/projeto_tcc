<?php
    session_start();
    
    require_once "header.php";
    require_once "../Model/conexao.class.php";
    require_once "../Model/DAO/usuarioDAO.class.php";
    require_once "../Model/usuario.class.php";

    
    if (!isset($_SESSION['id'])) {
        header("Location: index.php");
        exit();
    }

    $msg = array("","","","");

    if($_GET){
        $usuario = new Usuario($_GET["id"]);
        $usuarioDAO = new usuarioDAO();
        $ret = $usuarioDAO->buscar_usuario($kando);
    }
    
    
    if($_POST){
    
        $erro = false;
    
        if(empty($_POST["nome"])){
            $msg[0] = "Preencha o campo!";
            $erro = true;
        }
    
        if(empty($_POST["telefone"])){
            $msg[1] = "Preencha o campo!";
            $erro = true;
        }
    
        if(empty($_POST["email"])){
            $msg[2] = "Preencha o campo!";
            $erro = true;
        }
    
        if(empty($_POST["senha"])){
            $msg[3] = "Preencha o campo!";
            $erro = true;
        }
    
        if(!$erro){
            
            //Gravar no bd
            // if (
            //     !isset($_POST["idkando"], $_POST["nome"], $_POST["descricao"], $_POST["data_entrega"])){
            //     die("Erro: Dados inválidos ou incompletos.");
            // }
    
            $usuario = new usuario($_POST["idusuario"], $_POST["nome"], $_POST["telefone"], $_POST["email"], $_POST["senha"]);
    
            $usuarioDAO = new usuarioDAO();
            $retorno = $usuarioDAO -> alterar($usuario);
    
            header("location:pagePerfil.php?mensagem=$retorno");
        }
    }
    ?>

<br><br>

<h1 class="border">Perfil</h1>
<br><br>

<div class="container">
    <div class="content">
        <form method="POST" action="">
        <h2 class="title">Altere seus dados</h2>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" value="<?php echo $_SESSION["nome"]; echo isset($_POST['nome'])?$_POST['nome']:'' ?>" required>
        <br>

        <label for="telefone">Telefone: </label>
        <input type="text" name="nome" id="nome" value="<?php echo $_SESSION["telefone"]; echo isset($_POST['telefone'])?$_POST['telefone']:''?>" required>
        <br>

        <label for="email">Email: </label>
        <input type="text" name="nome" id="nome" value="<?php echo $_SESSION["email"]; echo isset($_POST['email'])?$_POST['email']:''?>" required>
        <br>

        <label for="senha">Nova senha: </label>
        <input type="text" name="nome" id="nome" placeholder="Digite uma nova senha" value="<?php echo $_SESSION["senha"]; echo isset($_POST['senha'])?$_POST['senha']:''?>" required>
        <br><br>

        <div class="btn-center">
            <input type="submit" class="salvar">&nbsp; &nbsp;
            <button class="btn-voltar"><a href="pagePerfil.php">Cancelar</a></button>
        </div>
</form>
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

        a {
            text-decoration: none;
            color: white;
            font-weight: normal;
        }

        .profile-foto{
            margin-top: 15px;
            border-radius: 50%;
            height: 150px;
            width: auto;
        }
        .photo i{
            font-size: 25px;
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
            border: 1px solid #000000;
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            font-size: 15px;
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
            text-transform: none;
            background-color: #F2E0A6;
            font-size: 15px;
            padding: 10px;
            border-radius: 6px;
            border: none;
            color: white;
        }
        
        .btn-voltar{
            background-color: red;
            color: white;
            font-size: 20px;
            padding: 10px;
            border-radius: 6px;
            text-decoration: none;
            width: 115px;
            text-align: center;
        }
        
        .btn-center{
            display: flex;
            justify-content: center;
            align-items: baseline;
        }
        
        .salvar{
            border: none;
            background-color: green;
            font-size: 20px;
            padding: 10px;
            border-radius: 6px;
            color: white;
            width: 115px;
            text-align: center;
        }

</style>

</body>
</html>
<?php require_once "footer.php"; ?>