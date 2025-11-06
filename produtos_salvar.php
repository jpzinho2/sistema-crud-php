<?php
include 'conexao.php';

if ($_POST) {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];
    $categoria = $_POST['categoria'];
    
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = "UPDATE produtos SET nome='$nome', preco=$preco, estoque=$estoque, categoria='$categoria' WHERE id=$id";
    } else {
        $sql = "INSERT INTO produtos (nome, preco, estoque, categoria) VALUES ('$nome', $preco, $estoque, '$categoria')";
    }
    
    if ($conexao->query($sql) === TRUE) {
        header("Location: produtos.php");
    } else {
        echo "Erro: " . $conexao->error;
    }
}

$conexao->close();
?>