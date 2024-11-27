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
    // var_dump($_SESSION);

    if (isset($_FILES['perfil_imagem']) && !empty($_FILES['perfil_imagem'])) {

        $usuario = new Usuario($_SESSION['id'], $_FILES["perfil_imagem"]["name"]);
        $usuarioDAO = new usuarioDAO();
        $usuarioDAO->alterarFoto($usuario);
    
        move_uploaded_file($_FILES['perfil_imagem']['tmp_name'], "../img-perfil/" . $_FILES['perfil_imagem']['name']);
        // echo 'Update realizado com sucesso';

    }

    //echo '<pre>' . var_dump($_SESSION['foto_perfil']) . '</pre>';


?>

<br><br>

<h1 class="border">Perfil</h1>
<br><br>

<div class="container">
    
    <div class="content">
        <h2 class="title">Verifique seus dados</h2>
        <!-- <form class="form-control" action="#" method="POST" enctype="multipart/form-data">
            <label for="foto">Foto de perfil:</label>
            <div class="photo">
                <img src="../img-perfil/<?php //echo isset($_SESSION['foto_perfil']) ? $_SESSION['foto_perfil'] : 'profile-picture.webp'; ?>" class="profile-foto" alt="foto de perfil">
                <br>
                    
                <img src="" id="foto">
                    
                <div class="btn-center">
                    <input type="file" class="form-label" id="blocos" name="bloco_imagem" onchange="mostrarFoto(this)" accept="image/png, image/jpeg"> &nbsp; &nbsp; &nbsp; &nbsp;
                    <button type="submit" class="btn-add">Adicionar foto</button>
                </div>
            </div>
        </form> -->
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
        $senha = $_SESSION["senha"];
        // Substitui a senha por asteriscos com o mesmo comprimento
        $senha_oculta = str_repeat('*', strlen($senha));

            echo "<button class='info' readonly>";
            echo $senha_oculta;
            echo "</button> <br>";
        ?>
        <br><br>

        <div class="btn-center">
            <!-- <a href="alterarPerfil.php" class="btn-alterar">Alterar</a> &nbsp; &nbsp; -->
            <a href="logout.php" class="btn-apagar">Sair</a>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

	<script>
		function mostrarFoto(img)
		{
			if(img.files && img.files[0])
			{
				var reader = new FileReader();
				reader.onload = function(e){
					$('#foto')
					.attr('src', e.target.result)
					.width(170)
					.height(100);
				};
				reader.readAsDataURL(img.files[0]);
            }
		}
        </script>
<style>

    h2{
        text-transform: uppercase;
    }
    
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
            place-items: center;
            color: white;
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

        input, .info, .btn-add{
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
            font-size: 15px;
            padding: 10px;
            border-radius: 6px;
            text-decoration: none;
            width: 105px;
            text-align: center;
            text-transform: uppercase;
        }

        .btn-center{
            display: flex;
            justify-content: center;
        }

        .btn-alterar{
            background-color: #F2E0A6;
            font-size: 15px;
            padding: 10px;
            border-radius: 6px;
            color: black;
            width: 105px;
            text-align: center;
            text-transform: uppercase;
            
        }

</style>

</body>
</html>
<?php require_once "footer.php"; ?>