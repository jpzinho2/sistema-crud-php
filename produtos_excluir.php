<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM produtos WHERE id = $id";
    
    if ($conexao->query($sql) === TRUE) {
        header("Location: produtos.php");
    } else {
        echo "Erro ao excluir: " . $conexao->error;
    }
} else {
    header("Location: produtos.php");
}

$conexao->close();
?>