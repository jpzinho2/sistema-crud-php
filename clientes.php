<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
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
    </style>
</head>
<body>
    <h1>Gerenciar Clientes</h1>
    
    <div class="menu">
        <a href="index.php">Início</a>
        <a href="clientes.php">Clientes</a>
        <a href="produtos.php">Produtos</a>
    </div>

    <a href="clientes_form.php" class="btn btn-success">Adicionar Novo Cliente</a>

    <h2>Lista de Clientes</h2>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM clientes ORDER BY id DESC";
            $result = $conexao->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['telefone'] . "</td>";
                    echo "<td>";
                    echo "<a href='clientes_form.php?id=" . $row['id'] . "' class='btn btn-warning'>Editar</a>";
                    echo "<a href='clientes_excluir.php?id=" . $row['id'] . "' class='btn btn-danger' onclick='return confirm(\"Tem certeza?\")'>Excluir</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Nenhum cliente cadastrado</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>