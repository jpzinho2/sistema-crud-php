<?php 
include 'conexao.php';

$cliente = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM clientes WHERE id = $id";
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        $cliente = $result->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo isset($cliente) ? 'Editar' : 'Cadastrar'; ?> Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
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
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .btn {
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            margin-right: 10px;
        }
        .btn-primary {
            background: #007bff;
            color: white;
        }
        .btn-secondary {
            background: #6c757d;
            color: white;
        }
    </style>
</head>
<body>
    <h1><?php echo isset($cliente) ? 'Editar' : 'Cadastrar'; ?> Cliente</h1>
    
    <div class="menu">
        <a href="index.php">Início</a>
        <a href="clientes.php">Clientes</a>
        <a href="produtos.php">Produtos</a>
    </div>

    <form action="clientes_salvar.php" method="POST">
        <?php if (isset($cliente)): ?>
            <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
        <?php endif; ?>
        
        <div class="form-group">
            <label for="nome">Nome do Cliente:</label>
            <input type="text" id="nome" name="nome" 
                   value="<?php echo isset($cliente) ? $cliente['nome'] : ''; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" 
                   value="<?php echo isset($cliente) ? $cliente['email'] : ''; ?>">
        </div>
        
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" 
                   value="<?php echo isset($cliente) ? $cliente['telefone'] : ''; ?>">
        </div>
        
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="clientes.php" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>