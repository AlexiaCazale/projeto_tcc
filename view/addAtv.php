<?php
  require_once "../Model/conexao.class.php";
  require_once "../Model/kando.class.php";
  require_once "../Model/disciplina.class.php";
  require_once "../Model/DAO/kandoDAO.class.php";
  require_once "../Model/DAO/disciplinaDAO.class.php";

  $msg = array("","","","","", "");

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

    if($_POST["disciplina"] == ''){
        $msg[4] = "Preencha o campo!";
        $erro = true;
    }

    if(!$erro){
        //Gravar no bd
        $kando = new KanDO(0, $_POST["nome"], $_POST["descricao"], $_POST["data_entrega"], $_POST["statusAtv"], $_POST["disciplina"]);

        $kandoDAO = new kandoDAO();
        $retorno = $kandoDAO -> inserir($kando);

        header("location:pageKando.php");
    }
}

    require_once "header.php";
?>

<div class="content">
	<div class="container">
        <br><br>
		<h1 class="border">Adicionar tarefa</h1>
        <div class="form-atv">
            <form action="#" method="post">
                
                <label for="nome">Nome da atividade:</label>
                <input type="text" name="nome" id="nome" placeholder="Adicione o nome da atividade" value="<?php echo isset($_POST['nome'])?$_POST['nome']:''?>">
                <div style="color:white"><?php echo $msg[0] != ""?$msg[0]:'';?></div> 
                
                <label for="descricao">Descrição da atividade:</label>
            <textarea name="descricao" id="descricao" placeholder="Adicione a descrição da atividade"><?php echo isset($_POST['descricao'])?$_POST['descricao']:''?></textarea>
                <div style="color:white"><?php echo $msg[1] != ""?$msg[1]:'';?></div>

                <label for="data_entrega">Data de entrega: </label>
                <input type="date" name="data_entrega" value="<?php echo isset($_POST['data_entrega'])?$_POST['data_entrega']:''?>">
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
                        <!-- <option value="0">Fazer</option>
                        <option value="1">Fazendo</option>
                        <option value="2">Feito</option> -->
                        <?php

                            $disciplina = new Disciplina();
                            $disciplinaDAO = new disciplinaDAO();
                            $retorno = $disciplinaDAO -> buscar_todos($disciplina);

                            echo '<pre>' . var_dump($retorno) . '</pre>';
        
                            foreach($retorno as $dado)
                            {
                                echo "<option value='{$dado->iddisciplina}'>{$dado->nome}</option>";
                            }

                        ?>
                        
                    </select>
                    <div style="color:white"><?php echo $msg[4] != ""?$msg[4]:'';?></div>
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
<?php require_once "footer.php"; ?>