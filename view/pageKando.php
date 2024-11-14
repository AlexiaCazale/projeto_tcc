<?php
    require_once "header.php";
    require_once "footer.php";
    require_once "../model/conexao.class.php";
    require_once "../model/kandoDAO.class.php";
    require_once "../model/kando.class.php";
    
    $kandoDAO = new kandoDAO();
    $retorno = $kandoDAO -> buscar_todas();

    $tableValues = [
        'arrayT1' => [],
        'arrayT2' => [],
        'arrayT3' => []
    ];

    function teste($x){
        global $retorno, $tableValues;
        foreach($retorno as $dado){
            if($dado->statusAtv == $x){
                $tableValues['arrayT' . ($x + 1)][] = $dado;
            }
        }
    }

    for ($i = 0; $i <= 2; $i++) {
        teste($i);
    }

    //echo '<pre>' . var_dump($tableValues['arrayT1']) . '</pre>';

?>

<br><br>
<h1 class="border">Quadro KanDO</h1>

<br><br>

<div class="container">
    <!-- Tabela Kanban -->
    <table>
        <tr>
            <th>FAZER</th>
        <?php
            global $tableValues;
            foreach($tableValues['arrayT1'] as $dados)
            {
                echo "<tr class='table1'>
                    <td>
                <b>{$dados -> nome}</b> <br>
                    {$dados -> descricao} <br>
                    {$dados -> data_entrega} <br><br>
    
                    <a href='alterarAtv.php?idproduto={$dados->idkando}' class='btn-alterar'>Alterar</a> &nbsp;
    
                    <a href='deletarAtv.php?idproduto={$dados->idkando}' class='btn-apagar' >Apagar</a>
                    
                    </td>
                    </tr>"; 
                }
        ?>
               
            </table>
            
        </tr>

        <table>
            <tr>
                <th>FAZENDO</th>
        <?php
            global $tableValues;
            foreach($tableValues['arrayT2'] as $dados)
            {
                echo "<tr class='table1'>
                    <td>
                <b>{$dados -> nome}</b> <br>
                    {$dados -> descricao} <br>
                    {$dados -> data_entrega} <br><br>
    
                    <a href='alterarAtv.php?idproduto={$dados->idkando}' class='btn-alterar'>Alterar</a> &nbsp;
    
                    <a href='deletarAtv.php?idproduto={$dados->idkando}' class='btn-apagar' >Apagar</a>
                    
                    </td>
                    </tr>"; 
                }
        ?>
            </tr>
        </table>

        <table>
            <tr>
                <th>FEITO</th>
        <?php
            global $tableValues;
            foreach($tableValues['arrayT3'] as $dados)
            {
                echo "<tr class='table1'>
                    <td>
                <b>{$dados -> nome}</b> <br>
                    {$dados -> descricao} <br>
                    {$dados -> data_entrega} <br><br>
    
                    <a href='alterarAtv.php?idproduto={$dados->idkando}' class='btn-alterar'>Alterar</a> &nbsp;
    
                    <a href='deletarAtv.php?idproduto={$dados->idkando}' class='btn-apagar' >Apagar</a>
                    
                    </td>
                    </tr>"; 
                }
        ?>
            </tr>
        </table>
        <!-- Botão de Adicionar Tarefa -->

    </div>
    <div class="btn-center">
        <a href="addAtv.php"><button class="add-task-btn">+</button></a>
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

             /* Tabela Kanban */
        table {
            width: 30%;
            display: inline-table;
            table-layout: fixed;
            /* border-spacing: 8px; */
        }

        th, td{
            background-color: #1b2238;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            color: white;
        }

        th {
            font-size: 1.2em;
            height: 25px;
        }

        tbody{
            /* margin: 0 25px; */
        }

         /* Botão de adicionar tarefa */
        .add-task-btn {
            width: 80px;
            /* height: 50px; */
            background-color: #F2E0A6;
            color: #20253b;
            border-radius: 8px;
            font-size: 24px;
            text-align: center;
            font-weight: bold;
            /* margin: 20px auto 0; */
            cursor: pointer;
         }

        .btn-center{
            display: flex;
            justify-content: center;
        }

        .btn-alterar{
            background-color: #F2E0A6;
            font-size: 15px;
            padding: 5px;
            border-radius: 6px;
            color: black;
        }

        .btn-apagar{
            background-color: red;
            color: white;
            font-size: 15px;
            padding: 5px;
            border-radius: 6px;
            text-decoration: none;
        }

        .container{
            display:flex;
            justify-content: center;
        }

        .table1{
            width: 100%;
            display: table;
        }
    </style>

</body>
</html>