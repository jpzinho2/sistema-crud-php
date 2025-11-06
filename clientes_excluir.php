<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM clientes WHERE id = $id";
    
    if ($conexao->query($sql) === TRUE) {
        header("Location: clientes.php");
    } else {
        echo "Erro ao excluir: " . $conexao->error;
    }
} else {
    header("Location: clientes.php");
}

$conexao->close();
?>