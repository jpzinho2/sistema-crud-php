<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .menu {
            background: #333;
            padding: 10px;
            margin-bottom: 20px;
        }
        .menu a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            padding: 5px 10px;
        }
        .menu a:hover {
            background: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 4px;
            margin: 5px;
            display: inline-block;
        }
        .btn-success {
            background: #28a745;
            color: white;
        }
        .btn-warning {
            background: #ffc107;
            color: black;
        }
        .btn-danger {
            background: #dc3545;
            color: white;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Gerenciar Produtos</h1>
    
    <div class="menu">
        <a href="index.php">Início</a>
        <a href="clientes.php">Clientes</a>
        <a href="produtos.php">Produtos</a>
    </div>

    <a href="produtos_form.php" class="btn btn-success">Adicionar Novo Produto</a>

    <h2>Lista de Produtos</h2>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM produtos ORDER BY id DESC";
            $result = $conexao->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>R$ " . number_format($row['preco'], 2, ',', '.') . "</td>";
                    echo "<td>" . $row['estoque'] . "</td>";
                    echo "<td>" . $row['categoria'] . "</td>";
                    echo "<td>";
                    echo "<a href='produtos_form.php?id=" . $row['id'] . "' class='btn btn-warning'>Editar</a>";
                    echo "<a href='produtos_excluir.php?id=" . $row['id'] . "' class='btn btn-danger' onclick='return confirm(\"Tem certeza que quer excluir?\")'>Excluir</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Nenhum produto cadastrado</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>