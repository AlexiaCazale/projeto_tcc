<?php
require_once '../models/conexao.php'; // Inclui o arquivo de conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf_cnpj = $_POST['cpf_cnpj'];
    $telefone = $_POST['telefone'];
    $data_cadastro = $_POST['data_cadastro'];

    try {
        // Prepara o SQL para inserção dos dados
        $sql = "INSERT INTO clientes (nome, email, cpf_cnpj, telefone, data_cadastro) VALUES (:nome, :email, :cpf_cnpj, :telefone, :data_cadastro)";
        $stmt = $conn->prepare($sql);

        // Associa os valores aos parâmetros
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':cpf_cnpj', $cpf_cnpj);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':data_cadastro', $data_cadastro);

        // Executa a inserção
        $stmt->execute();
        echo "<p>Cliente cadastrado com sucesso!</p>";

        // Redireciona de volta para o formulário para limpar os dados e evitar reenvio
        header("Location: " . $_SERVER['PHP_SELF']);
        exit(); // Encerra o script após o redirecionamento
    } catch(PDOException $e) {
        echo "Erro ao cadastrar cliente: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Cliente</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "Roboto", sans-serif;
        }
        h2 {
            text-transform: uppercase;
        }
        form, h2 {
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        label, button {
            font-weight: bold;
        }
        form {
            padding: 48px;
            background: #ffd468;
        }
        .flex_row {
            display: flex;            
            align-items: center;
            flex-direction: row;
        }
        button {
            text-transform: uppercase;
            padding: 10px;
            border: 0.5px solid #000;
            border-radius: 6px;
            cursor: pointer;
        }
        input {
            padding: 4px;
            border-radius: 8px;
            border: 0.5px solid #000;
            margin-left: 4px;
        }
    </style>
</head>
<body>

<h2>Cadastro de Cliente</h2>
<br><br>
<form method="POST" action="">
    <div class="flex_row">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required>
    </div>
    <br>
    <div class="flex_row">
        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email" required>
    </div>
    <br>
    <div class="flex_row">        
        <label for="cpf_cnpj">CPF/CNPJ: </label>
        <input type="text" name="cpf_cnpj" id="cpf_cnpj" required>
    </div>
    <br>
    <div class="flex_row">
        <label for="tel">Telefone: </label>
        <input type="text" name="telefone" id="tel" required>
    </div>
    <br>
    <div class="flex_row">
        <label for="cadastro">Data de Cadastro: </label>
        <input type="date" name="data_cadastro" id="cadastro" required>
    </div>
    <br><br>
    <button type="submit">Cadastrar</button>
</form>

</body>
</html>
