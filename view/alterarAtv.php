<?php

session_start();

  require_once "../model/conexao.class.php";
  require_once "../model/kando.class.php";
  require_once "../model/kandoDAO.class.php";

  $msg = array("","","","");

if($_GET){
    $kando = new KanDO($_GET["idkando"]);
    $kandoDAO = new kandoDAO();
    $ret = $kandoDAO->buscar_uma_atividade($kando);
}


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

    if(empty($_POST["data_entrega"])){
        $msg[2] = "Preencha o campo!";
        $erro = true;
    }

    if($_POST["statusAtv"] == ''){
        $msg[3] = "Preencha o campo!";
        $erro = true;
    }

    if(!$erro){
        
        //Gravar no bd
        // if (
        //     !isset($_POST["idkando"], $_POST["nome"], $_POST["descricao"], $_POST["data_entrega"])){
        //     die("Erro: Dados inválidos ou incompletos.");
        // }

        $kando = new KanDO($_POST["nome"], $_POST["descricao"], $_POST["data_entrega"], $_POST["statusAtv"], $_POST["disciplina"]);

        $kandoDAO = new kandoDAO();
        $retorno = $kandoDAO -> alterar($kando);

        header("location:pageKando.php?mensagem=$retorno");
    }
}
    require_once "header.php";
    require_once "footer.php";
?>

<div class="content">
	<div class="container">
        <br><br>
		<h1 class="border">Alterar tarefa</h1>
        <div class="form-atv">
            <form action="#" method="post">
                <input type="hidden" name="idkando" value="<?php echo $ret[0] -> idkando; ?>">

                <label for="nome">Nome da atividade:</label>
                <input type="text" name="nome" id="nome" value="<?php echo $ret[0] -> nome; ?>" required>
                <div style="color:white"><?php echo $msg[0] != ""?$msg[0]:'';?></div> 
                
                <label for="descricao">Descrição da atividade:</label>
                <textarea name="descricao" id="descricao" placeholder="Adicione a descrição da atividade"><?php echo $ret[0] -> descricao; ?></textarea>
                <div style="color:white"><?php echo $msg[1] != ""?$msg[1]:'';?></div>

                <label for="data_entrega">Data de entrega: </label>
                <input type="date" name="data_entrega" value="<?php echo $ret[0] -> fata_entrega; ?>">

                <div style="color:white"><?php echo $msg[2] != ""?$msg[2]:'';?></div>

                <label for="statusAtv">Status:</label>
                <!-- fazer / fazendo / feito -->
                <select name="statusAtv" id="statusAtv">
                        <option value="">Escolha os status da sua atividade</option>
                        <option value="0">Fazer</option>
                        <option value="1">Fazendo</option>
                        <option value="2">Feito</option>
                        
                </select>
                <div style="color:white"><?php echo $msg[3] != ""?$msg[3]:'';?></div>
                    
                <label for="disciplina">Disciplina:</label>
                <select name="disciplina" id="disciplina">
                        <option value="">Escolha os status da sua atividade</option>
                        <option value="0">Fazer</option>
                        <option value="1">Fazendo</option>
                        <option value="2">Feito</option>
                        <?php

                            // $disciplina = new Disicplina();
                            // $ = new cursoDAO();
                            // $ret = $cursoDAO -> buscar_um_curso($curso);
        
                            // foreach($ret as $dado)
                            // {
                            //     if(isset($_POST["curso"]) && $_POST["curso"] == $dado->idcurso)
                            //     {
                            //         echo "<option value='{$dado->idcurso}' selected>{$dado->nomeCurso}</option>";
                            //     }
                            //     else
                            //     {
                            //         echo "<option value='{$dado->idcurso}'>{$dado->nomeCurso}</option>";
                            //     }
                            // }//fim do foreach

                        ?>
                        
                    </select>
                <br><br>
                <div class="center">
                    <input type="submit" class="enviar"> 
                </div>
            </form>
        </div>
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

        .border{
            background-color: #1b2238;
            padding: 15px;
            border-radius: 8px;
            margin: 0 35%;
            display: flex;
            justify-content: center;
        }

        .enviar{
            background-color: green;
            color: black;
            border: none;
            font-weight: bold;
            font-size: 20px;
            width: 45%;
            cursor: pointer;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
         }


        input, textarea, select {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            margin: 5px 0 10px 0;
            border: 1px solid #bbb;
            /* background-color: #f8f8f8; */
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
        }   

        .form-atv{
            border-radius: 8px;
            color: black;
            padding: 40px;
            flex-direction: column;
            display: flex;
            justify-content: space-between;
            margin: 0 30%;
        }

        label {
            display: block;
            margin-top: 15px;
            font-size: 20px;
            font-weight: bold;
        }

    </style>

</body>
</html>