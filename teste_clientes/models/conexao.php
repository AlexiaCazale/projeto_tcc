<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teste_clientes";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Define o modo de erro do PDO para exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch(PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
}
?>
