<?php
    require_once "../Model/conexao.class.php";
    require_once "../Model/curso.class.php";
    require_once "../Model/DAO/cursoDAO.class.php";
    require_once "../Model/disciplina.class.php";
    require_once "../Model/disciplinaDAO.class.php";

    $msg = array("","");

    if($_POST){

        $erro = false;

        if(empty($_POST["nome"])){
            $msg[0] = "Preencha o campo!";
            $erro = true;
        }

        if(empty($_POST["descricao"])){
            $msg[1] = "Preencha o campo!";
            $erro = true;
        }

        if($_POST["curso"] == ''){
            $msg[3] = "Selecione um curso!";
            $erro = true;
        }

        if(!$erro){
            //Gravar no bd
            $curso = new Curso($_POST['curso']);

            $disciplina = new Disciplina(0, $_POST["nome"], $_POST["descricao"], $curso);

            // $cursoDAO = new cursoDAO();
            // $retorno -> buscar_todos($curso);

            echo '<pre>' . var_dump($curso) . '</pre>';

            $disciplinaDAO = new disciplinaDAO();
            $disciplinaDAO -> inserir($disciplina);

            header("location:pageFatec.php");
        }
    }

    require_once "header.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/addDisciplina.css">
        <title>Corujário ADM - FATEC</title>
    </head>
    <body>
        <div class="content center">
            <div class="container center flex_column">
                <br><br>
                <h1 class="border">Adicionar disciplina</h1>
                <div class="form-atv">
                    <form action="#" method="post">
                        <label for="nome">Nome da disciplina:</label>
                        <input type="text" name="nome" id="nome" placeholder="Adicione o nome da disciplina" value="<?php echo isset($_POST['nome'])?$_POST['nome']:''?>">
                        <div style="color:#f01e2c"><?php echo $msg[0] != ""?$msg[0]:'';?></div> 
                        
                        <label for="descricao">Descrição da disciplina:</label>
                        <textarea name="descricao" id="descricao" placeholder="Adicione a descrição da disciplina"><?php echo isset($_POST['descricao'])?$_POST['descricao']:''?></textarea>
                        <div style="color:#f01e2c"><?php echo $msg[1] != ""?$msg[1]:'';?></div>

                        <label for="curso">Curso:</label>
                        <select name="curso" id="curso">
                            <option value="">Escolha o curso da sua disciplina</option>
                            <?php

                                $curso = new Curso();
                                $cursoDAO = new cursoDAO();
                                $ret = $cursoDAO -> buscar_todos($curso);
            
                                foreach($ret as $dado)
                                {
                                    if(isset($_POST["curso"]) && $_POST["curso"] == $dado->idcurso)
                                    {
                                        echo "<option value='{$dado->idcurso}' selected>{$dado->nome}</option>";
                                    }
                                    else
                                    {
                                        echo "<option value='{$dado->idcurso}'>{$dado->nome}</option>";
                                    }
                                }//fim do foreach
                                
                                ?>
                            <div style="color:#f01e2c"><?php echo $msg[2] != ""?$msg[2]:'';?></div>
                        </select>
                        <br><br>
                        <button type="submit" class="enviar">Cadastrar disciplina</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>
    
<?php require_once "footer.php"; ?>