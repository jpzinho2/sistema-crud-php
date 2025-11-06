<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Meu Sistema</title>
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
    <h1>Meu Sistema de Cadastro</h1>
    
    <div class="menu">
        <a href="index.php">Início</a>
        <a href="clientes.php">Clientes</a>
        <a href="produtos.php">Produtos</a>
    </div>
    
    <h2>Bem-vindo ao sistema!</h2>
    <p>Escolha uma opção no menu acima para começar.</p>
</body>
</html>