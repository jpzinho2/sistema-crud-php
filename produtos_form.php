<?php 
include 'conexao.php';

$produto = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE id = $id";
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        $produto = $result->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo isset($produto) ? 'Editar' : 'Cadastrar'; ?> Produto</title>
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
        input[type="number"] {
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
    <h1><?php echo isset($produto) ? 'Editar' : 'Cadastrar'; ?> Produto</h1>
    
    <div class="menu">
        <a href="index.php">Início</a>
        <a href="clientes.php">Clientes</a>
        <a href="produtos.php">Produtos</a>
    </div>

    <form action="produtos_salvar.php" method="POST">
        <?php if (isset($produto)): ?>
            <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
        <?php endif; ?>
        
        <div class="form-group">
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" 
                   value="<?php echo isset($produto) ? $produto['nome'] : ''; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" 
                   value="<?php echo isset($produto) ? $produto['preco'] : ''; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="estoque">Quantidade em Estoque:</label>
            <input type="number" id="estoque" name="estoque" 
                   value="<?php echo isset($produto) ? $produto['estoque'] : ''; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" 
                   value="<?php echo isset($produto) ? $produto['categoria'] : ''; ?>">
        </div>
        
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="produtos.php" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>