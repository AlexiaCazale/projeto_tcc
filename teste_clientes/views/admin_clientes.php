<?php
include '../models/conexao.php'; // Inclui o arquivo de conexão

// Consulta todos os clientes
try {
    $sql = "SELECT * FROM clientes";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Armazena os resultados em uma variável
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch(PDOException $e) {
    echo "Erro ao buscar clientes: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Administração - Lista de Clientes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "Roboto", sans-serif;
        }
        h2 {
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
        }
        table {
            display: flex;
            align-items: center;
            justify-content: center;
            border-collapse: collapse;
        }
        table, th, td {
            margin: 28px;
        }
        th, td {
            border: 1px solid #000;
            padding: 28px;
            text-align: center;
        }
        th {
            text-transform: uppercase;
            background-color: #ffd468;
        }
    </style>
</head>
<body>

<h2>Lista de Clientes</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>CPF/CNPJ</th>
        <th>Telefone</th>
        <th>Data de Cadastro</th>
    </tr>
    <?php if ($clientes): ?>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?php echo htmlspecialchars($cliente['id']); ?></td>
                <td><?php echo htmlspecialchars($cliente['nome']); ?></td>
                <td><?php echo htmlspecialchars($cliente['email']); ?></td>
                <td><?php echo htmlspecialchars($cliente['cpf_cnpj']); ?></td>
                <td><?php echo htmlspecialchars($cliente['telefone']); ?></td>
                <td><?php echo htmlspecialchars($cliente['data_cadastro']); ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="6">Nenhum cliente cadastrado.</td>
        </tr>
    <?php endif; ?>
</table>

</body>
</html>
