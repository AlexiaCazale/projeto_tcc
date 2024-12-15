<?php
session_start();

    require_once "header.php";
    require_once "../Model/conexao.class.php";
    require_once "../Model/DAO/kandoDAO.class.php";
    require_once "../Model/kando.class.php";
    
    if (!isset($_SESSION['id'])) {
        header("Location: index.php");
        exit();
    }

    $kandoDAO = new kandoDAO();
    $retorno = $kandoDAO->buscar_todas();

    //echo '<pre>' . var_dump($retorno) . '</pre>';

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

<!DOCTYPE html>
<html lang="pt-br">
    <body>
        <h1 class="border">Dashboard</h1>   
        <h3>Bem-vindo(a), <?php echo $_SESSION["nome"] ?>!</h3>
        <h3>Tarefas para fazer: </h3>
        <div class="center">
        <?php 
            global $tableValues;


            foreach($tableValues['arrayT1'] as $dados)
            {
                echo "<b>{$dados->nome}</b>
                {$dados -> descricao} <br>
                <p>Para: <br>{$dados -> data_entrega}</p>";
                      
            }
        ?>
        </div>

        <style>

            h1{
                font-size: 40px;
                text-align: center;
                font-weight: 800;
                font-style: normal;
                color: white;
                text-transform: uppercase;
            }
            
            h3 {
                text-align: center;
            }

            .center{
                display: inline-grid;
                justify-content: center;
            }

            .border{
                background-color: #1b2238;
                padding: 15px;
                border-radius: 8px;
                margin: 0 35%;
                display: flex;
                justify-content: center;
            }

            div{
                background-color: #1b2238;
                padding: 20px;
                border-radius: 8px;
                text-align: center;
                color: white;
                word-wrap: break-word;
                margin: 0 auto;
                width: 500px;
            }

        </style>
     </body> 
</html>

<?php require_once "footer.php"; ?>