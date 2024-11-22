<?php
session_start();

    require_once "header.php";
    require_once "../model/conexao.class.php";
    require_once "../model/kandoDAO.class.php";
    require_once "../model/kando.class.php";
    
    if (!isset($_SESSION['id'])) {
        header("Location: index.php");
        exit();
    }

    $kandoDAO = new kandoDAO();
    $retorno = $kandoDAO->buscar_todas();

    //echo '<pre>' . var_dump($tableValues['arrayT1']) . '</pre>';

?>

<!DOCTYPE html>
<html lang="pt-br">
    <body>
        <h1 class="border">Dashboard</h1>   
        <h3>Bem-vindo(a), <?php echo $_SESSION["nome"] ?>!</h3>
        <h3>Tarefas para fazer: </h3>
        <li>
        <?php 
            global $tableValues;
            
            foreach($tableValues['arrayT1'] as $dados)
            {
                echo "<li>{$dados->nome}</li>
                      <li>{$dados->data_entrega}</li>";
                      
            }
        ?>
        </li>

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

            .border{
                background-color: #1b2238;
                padding: 15px;
                border-radius: 8px;
                margin: 0 35%;
                display: flex;
                justify-content: center;
            }

        </style>
     </body> 
</html>

<?php require_once "footer.php"; ?>