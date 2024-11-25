<?php

session_start();

require_once "header.php";
require_once "../model/conexao.class.php";
require_once "../model/blocos.class.php";
require_once "../model/blocosDAO.class.php";
require_once "../model/cursoDAO.class.php";
require_once "../model/curso.class.php";
require_once "../model/pet.class.php";
require_once "../model/petDAO.class.php";

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

if (isset($_FILES['bloco_imagem']) && !empty($_FILES['bloco_imagem'])) {

    $bloco = new Blocos(0, $_FILES["bloco_imagem"]["name"]);
    $blocoDAO = new blocosDAO();
    $blocoDAO->inserir($bloco);
    
    move_uploaded_file($_FILES['bloco_imagem']['tmp_name'], "../img-blocos/" . $_FILES['bloco_imagem']['name']);
    // echo 'Update realizado com sucesso';
}

if (isset($_FILES['pet_imagem']) && !empty($_FILES['pet_imagem'])) {

    $pet = new Pet(0, $_FILES["pet_imagem"]["name"]);
    $petDAO = new petDAO();
    $petDAO->inserir($pet);

    move_uploaded_file($_FILES['pet_imagem']['tmp_name'], "../img-pets/" . $_FILES['pet_imagem']['name']);
    // echo 'Update realizado com sucesso';
}

// $msg = array("","","","","");
// if($_POST){

//     $erro = false;

//     if($_FILES["imagem"]["name"] == "")
//     {
//         $msg[2] = "Escolha uma imagem para o produto";
//         $erro = true;
//     }
//     else if($_FILES["imagem"]["type"] != "image/png" && $_FILES["imagem"]["type"] != "image/jpg" && $_FILES["imagem"]["type"] != "image/jpeg")
//     {
//         $msg[2] = "Tipo de arquivo inválido";
//         $erro = true;
//     }
    

?>
    <br><br>
    <h1 class="border">Fatec Jahu</h1>
    <br><br>
    <div class="container">
        <div class="content">
            <h2 class="border">Cursos</h2>
            <br>
            <div class="infos">
                <div class="cursos">
                    <h3 class="title">Selecione um curso: </h3>
                    <br>
                    <input type="radio" name="sistemas-para-internet" value="1">
                    <label for="sistemas-para-internet">Construção Naval</label> <br>
                    <input type="radio" name="sistemas-para-internet" value="2">
                    <label for="sistemas-para-internet">Gestão da Produção Industrial</label><br>
                    <input type="radio" name="sistemas-para-internet" value="3">
                    <label for="sistemas-para-internet">Gestão Empresarial</label><br>
                    <input type="radio" name="sistemas-para-internet" value="4">
                    <label for="sistemas-para-internet">Meio Ambiente e Recursos Hídricos</label><br>
                    <input type="radio" name="sistemas-para-internet" value="5">
                    <label for="sistemas-para-internet">Sistemas para Internet</label><br>
                    <input type="radio" name="sistemas-para-internet" value="6">
                    <label for="sistemas-para-internet">Desenvolvimento de Software Multiplataforma</label><br>
                    <input type="radio" name="sistemas-para-internet" value="7">
                    <label for="sistemas-para-internet">Gestão da Tecnologia da Informação</label><br>
                    <input type="radio" name="sistemas-para-internet" value="8">
                    <label for="sistemas-para-internet">Logística</label><br>
                    <input type="radio" name="sistemas-para-internet" value="9">
                    <label for="sistemas-para-internet">Sistemas Navais</label><br>
                </div>
                <div class="disciplinas">
                    <h3 class="title">Disciplinas:</h3>
                    <br><br>
                    <div class="btn-center">
                        <!-- <a href="addCurso.php"><button>Adicionar curso</button></a> &nbsp; &nbsp; -->
                        <a href="addDisciplina.php"><button>Adicionar disciplina</button></a>
                        
                    </div>
                </div>
            </div>
            <br>
        </div>
        <br><br>
        
        <div class="content">
            <form class="form-control" action="#" method="POST" enctype="multipart/form-data">
                <h2 class="border">Blocos</h2>
                <div class="btn-center">
                    <input type="file" class="form-label" id="blocos" name="bloco_imagem" onchange="mostrarBloco(this)" accept="image/png, image/jpeg">
                </div>
                <img src="" id="bloco">
                <div class="btn-center">
                    <input class="form-label" type="submit" value="Adicionar bloco">
                </div>
            </form><br>
            <div>
            <?php 
                $blocosDAO = new blocosDAO();
                $bloco = $blocosDAO->buscar_todos();

                foreach($bloco as $dados)
                {
                    echo '<img src="../img-blocos/' . $dados->nome . ' "alt="imagem" class="blocos">';
                    //echo '<pre>' . var_dump($dados->imagem) . '</pre>';

                }
            ?>
            </div>
        </div>

        <br><br>

        <div class="content">
            <form class="form-control" action="#" method="POST" enctype="multipart/form-data">
                <h2 class="border">Pets</h2>
                <div class="btn-center">
                    <input type="file" class="form-label" id="pets" name="pet_imagem" onchange="mostrarPet(this)" accept="image/png, image/jpeg">
                </div>
                <img src="" id="pet">
                <div class="btn-center">
                    <input class="form-label" type="submit" value="Adicionar pet">
                </div>
            </form><br>
            <div>
            <?php 
            $petDAO = new petDAO();
            $pet = $petDAO->buscar_todos();

            foreach($pet as $dados)
            {
                echo '<img src="../img-pets/' . $dados->nome . '"alt="imagem" class="pets">';
            }
            ?>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script>
		function mostrarBloco(img)
		{
			if(img.files && img.files[0])
			{
				var reader = new FileReader();
				reader.onload = function(e){
					$('#bloco')
					.attr('src', e.target.result)
					.width(170)
					.height(100);
				};
				reader.readAsDataURL(img.files[0]);
            }
		}

		function mostrarPet(img)
		{

		    if(img.files && img.files[0]){
                var reader = new FileReader();
				reader.onload = function(e){
					$('#pet')
					.attr('src', e.target.result)
					.width(170)
					.height(100);
				};
				reader.readAsDataURL(img.files[0]);
            }
		}
        
	</script>
        
    <style>
        .blocos{
            width: 50%;
            border-radius: 12px;
            padding: 10px;
        }

        .pets{
            width: 40%;
            border-radius: 12px;
            padding: 10px;
            display: inline-flex;
            justify-content: center;
            margin: auto;
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

        .border{
            background-color: #1b2238;
            padding: 15px;
            border-radius: 8px;
            margin: 0 35%;
            display: flex;
            justify-content: center;
            color: white;
        }

        button, .form-label{
            background-color: #F2E0A6;
            font-weight: 700;
            font-size: 15px;
            padding: 10px;
            border-radius: 6px;
            color: black;
        }

        .btn-center{
            display: flex;
            justify-content: center;
        }

        .content{
            background-color: #1b2238;
            padding: 15px;
            border-radius: 8px;
            margin: 0 15%;
        }

        .infos, .title{
            width: 100%;
            display: flex;
            justify-content: space-around;
            text-align: center;
            color: white;
        }

        .cursos{
            width: 50%;
            text-align: left;
            margin-left: 10px;
        }

        input, label{
            padding: 5px;
            margin-bottom: 10px;
        }

        .disciplinas{
            width: 50%;
        }

    </style>

    <?php require_once "footer.php"; ?>
</body>
</html>
