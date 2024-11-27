<?php

session_start();
require_once "header.php";
require_once "../model/conexao.class.php";
require_once "../model/blocosDAO.class.php";
require_once "../model/cursoDAO.class.php";
require_once "../model/curso.class.php";
require_once "../model/disciplinaDAO.class.php";
require_once "../model/disciplina.class.php";
require_once "../model/petDAO.class.php";

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

$curso = new Curso();
$cursoDAO = new cursoDAO();
$ret = $cursoDAO -> buscar_todos($curso);

?>
    <br><br>
    <h1 class="border">Fatec Jahu</h1>
    <br><br>
    <div class="container">
        <div class="content center">
            <!-- <h2 class="border">retorno</h2> -->
            <br>
            <div class="infos ">
                <div class="retorno">
                    <h3 class="title">Selecione um curso: </h3>
                    <br>
                    <?php
                        global $ret;
                           
            
                            foreach($ret as $dado)
                            {
                                if(isset($_POST["curso"]) && $_POST["curso"] == $dado->idcurso)
                                {   
                                    echo "<div class='align_row'>";
                                    echo "<input type='radio' value='{$dado->idcurso}' name='curso' id='{$dado->idcurso}'>";
                                    echo "<label for='{$dado->idcurso}'>{$dado->nome}</label> ";
                                    echo "</div>";
                                }
                                else
                                {
                                    echo "<div class='align_row'>";
                                    echo "<input type='radio' value='{$dado->idcurso}' name='curso' id='{$dado->idcurso}'>";
                                    echo "<label for='{$dado->idcurso}'>{$dado->nome}</label> ";
                                    echo "</div>";
                                }
                            }//fim do foreach
                                
                        ?>
                </div>
                <div class="disciplinas">
                <?php                           
                    global $ret;
                    $cursoSelecionado = $ret;
                                    
                    //echo '<pre>' . var_dump($cursoSelecionado) . '</pre>';

                    if (isset($_POST["curso"])) {            
    
                    $disciplina = new Disciplina();
                    $disciplinaDAO = new disciplinaDAO();
                    $retorno = $disciplinaDAO->buscar_todos($disciplina);

                    echo '<pre>' . var_dump($retorno) . '</pre>';


                        foreach($retorno as $dado){
                            if ($dado->idcurso == $cursoSelecionado) {
                                echo "<div class='align_row'>";
                                echo "<p name='curso' id='{$dado->idcurso}'>{$dado->nome}</p>";
                                echo "</div>";
                            }
                        }
                    }

                ?>  
                <input type="submit" class="center" value="Mostrar Disciplinas">
                </div>
            </div>
        </div>
        <br><br>
        <div class="content">
        <form class="form-control" action="#" method="POST" enctype="multipart/form-data">
            <h2 class="border">Blocos</h2>
            <?php 
                $blocosDAO = new blocosDAO();
                $bloco = $blocosDAO->buscar_todos();

                //echo '<pre>' . var_dump($blocosDAO->buscar_todos()) . '</pre>';

                foreach($bloco as $dados)
                {
                    echo '<img src="../img-blocos/' . $dados->nome . ' "alt="imagem" class="blocos">';
                    //echo '<pre>' . var_dump($dados->imagem) . '</pre>';

                }
            ?>
        </form>
            <br>
        </div>

        <br><br>

        <div class="content">
            <form class="form-control" action="#" method="POST" enctype="multipart/form-data">
                <h2 class="border">Pets</h2>
                <div class="center">
                <?php 
                $petDAO = new petDAO();
                $pet = $petDAO->buscar_todos();

                foreach($pet as $dados)
                {
                    echo '<img src="../img-pets/' . $dados->nome . '"alt="imagem" class="pets">';
                }
                ?>
                </div>
            </form>
            <br>
        </div>
    </div>
        
    <style>

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

        .center {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
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
            /* align-items: center;
            justify-content: center; */
            /* text-align: center; */
            color: white;
            margin-left: 15px;
        }

        /* .retorno{
            width: 50%;
            /* text-align: justify; 
        } */

        input, label{
            padding: 5px;
            margin-bottom: 10px;
        }

        .disciplinas{
            width: 50%;
            
        }

        .align_row {
            display: flex;
            flex-direction: row;
            /* justify-content: center; */
            align-items: center;
        }

    </style>

    <?php require_once "footer.php"; ?>
</body>
</html>
