<?php

session_start();

require_once "header.php";
require_once "../Model/conexao.class.php";
require_once "../Model/blocos.class.php";
require_once "../Model/DAO/blocosDAO.class.php";
require_once "../Model/DAO/cursoDAO.class.php";
require_once "../Model/curso.class.php";
require_once "../Model/DAO/disciplinaDAO.class.php";
require_once "../Model/disciplina.class.php";
require_once "../Model/pet.class.php";
require_once "../Model/DAO/petDAO.class.php";

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

if (isset($_FILES['bloco_imagem']) && !empty($_FILES['bloco_imagem'])) {

    $bloco = new Blocos(0, $_FILES["bloco_imagem"]["name"]);
    $blocoDAO = new blocosDAO();
    $blocoDAO->inserir($bloco);
    
    move_uploaded_file($_FILES['bloco_imagem']['tmp_name'], "../src/img-blocos/" . $_FILES['bloco_imagem']['name']);
    // echo 'Update realizado com sucesso';
}

if (isset($_FILES['pet_imagem']) && !empty($_FILES['pet_imagem'])) {

    $pet = new Pet(0, $_FILES["pet_imagem"]["name"]);
    $petDAO = new petDAO();
    $petDAO->inserir($pet);

    move_uploaded_file($_FILES['pet_imagem']['tmp_name'], "../src/img-pets/" . $_FILES['pet_imagem']['name']);
    // echo 'Update realizado com sucesso';

}

$curso = new Curso();
$cursoDAO = new cursoDAO();
$ret = $cursoDAO -> buscar_todos($curso);

?>
    <br><br>
    <h1 class="border">Fatec Jahu</h1>
    <br><br>
    <div class="container">
        <div class="content">
            <h2 class="border">Cursos e Disciplinas</h2>
            <br>
            <div class="infos">
                <div class="cursos">
                <form method="POST" action="">
                    <h3 class="title">Cursos cadastrados: </h3>
                    <br>
                    <div class="center_colunm">
                        <?php
            
                            foreach($ret as $dado)
                            {
                                if(isset($_POST["curso"]) && $_POST["curso"] == $dado->idcurso)
                                {
                                    echo "<div class='align_row'>";
                                    echo "<input type='radio' value='{$dado->idcurso}' name='curso' id='{$dado->idcurso}'>";
                                    echo "<label for='{$dado->idcurso}'>{$dado->nome}</label> <br>";
                                    echo "</div>";
                                }
                                else
                                {
                                    echo "<div class='align_row'>";
                                    echo "<input type='radio' value='{$dado->idcurso}' name='curso' id='{$dado->idcurso}'>";
                                    echo "<label for='{$dado->idcurso}'>{$dado->nome}</label> <br>";
                                    echo "</div>";
                                }
                            }//fim do foreach
                                
                        ?>
                        <br>
                        <input type="submit" class="form-label" value="Mostrar Disciplinas">
                    </div>
                </form>
                </div>
                <div class="disciplinas">
                    <h3 class="title">Disciplina:</h3>
                    <div>
                        <!-- <a href="addCurso.php"><button>Adicionar curso</button></a> &nbsp; &nbsp; -->
                        <?php 
                            global $ret;                                    
                            //echo '<pre>' . var_dump($ret) . '</pre>';         
                            if (isset($_POST['curso'])) {

                                $cursoSelecionado = $_POST['curso'];

                                //$disciplina = new Disciplina();
                                $disciplinaDAO = new disciplinaDAO();
                                $retorno = $disciplinaDAO->buscar_todos($cursoSelecionado);
                                
                                // echo '<pre>' . var_dump($cursoSelecionado) . '</pre>';
                                // echo '<pre>' . var_dump($retorno) . '</pre>';
                                
                                if ($retorno) {
                                    foreach ($retorno as $dados) {
                                        if($dados -> idcurso == 1 && $cursoSelecionado == 1){
                                        echo "<div class='align_row'>";
                                        echo "<p name='disciplina'>{$dados->nome}</p>";
                                        echo "</div>";
                                        }

                                        if($dados -> idcurso == 2 && $cursoSelecionado == 2){
                                        echo "<div class='align_row'>";
                                        echo "<p name='disciplina'>{$dados->nome}</p>";
                                        echo "</div>";
                                        }

                                        if($dados -> idcurso == 3 && $cursoSelecionado == 3){
                                        echo "<div class='align_row'>";
                                        echo "<p name='disciplina'>{$dados->nome}</p>";
                                        echo "</div>";
                                        }

                                        if($dados -> idcurso == 4 && $cursoSelecionado == 4){
                                        echo "<div class='align_row'>";
                                        echo "<p name='disciplina'>{$dados->nome}</p>";
                                        echo "</div>";
                                        }

                                        if($dados -> idcurso == 5 && $cursoSelecionado == 5){
                                        echo "<div class='align_row'>";
                                        echo "<p name='disciplina'>{$dados->nome}</p>";
                                        echo "</div>";
                                        }

                                        if($dados -> idcurso == 6 && $cursoSelecionado == 6){
                                        echo "<div class='align_row'>";
                                        echo "<p name='disciplina'>{$dados->nome}</p>";
                                        echo "</div>";
                                        }
                                        
                                        if($dados -> idcurso == 7 && $cursoSelecionado == 7){
                                        echo "<div class='align_row'>";
                                        echo "<p name='disciplina'>{$dados->nome}</p>";
                                        echo "</div>";
                                        }

                                        if($dados -> idcurso == 8 && $cursoSelecionado == 8){
                                        echo "<div class='align_row'>";
                                        echo "<p name='disciplina'>{$dados->nome}</p>";
                                        echo "</div>";
                                        }
                                        
                                        if($dados -> idcurso == 9 && $cursoSelecionado == 9){
                                        echo "<div class='align_row'>";
                                        echo "<p name='disciplina'>{$dados->nome}</p>";
                                        echo "</div>";
                                        }
                                        
                                    }
                                }
                            }

                        ?>  
                        <br>
                       
                        <a href="addDisciplina.php"><button>Adicionar</button></a> &nbsp;
                            
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
                    echo '<img src="../src/img-blocos/' . $dados->nome . ' "alt="imagem" class="blocos">';
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
            <div class="center">
            <?php 
            $petDAO = new petDAO();
            $pet = $petDAO->buscar_todos();

            foreach($pet as $dados)
            {
                echo '<img src="../src/img-pets/' . $dados->nome . '"alt="imagem" class="pets">';
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

        h2{
            text-transform: uppercase;
        }

        .center {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .center_colunm {
            display: flex;
            /* justify-content: center;*/
            flex-direction: column;
            /* flex-wrap: wrap;
            align-content: flex-end; */ 
            align-items: flex-start;
            /* margin-right: 10%; */
            text-align: start;
        }

        .blocos{
            width: 50%;
            border-radius: 12px;
            padding: 10px;
        }

        .pets{
            width: 30%;
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
            text-transform: uppercase;
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
            /* justify-content: space-around; */
            color: white;
        }

        .cursos{
            width: 50%; 
            margin-left: 10px;
            align-items: start;
        }

        input, label{
            padding: 5px;
            margin-bottom: 10px;
        }

        .disciplinas{
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: start;
        }

        .align_row {
            display: flex;
            flex-direction: row;
            /* justify-content: center;
            align-items: center; */
        }

    </style>

    <?php require_once "footer.php"; ?>
</body>
</html>
