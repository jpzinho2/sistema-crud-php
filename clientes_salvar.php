<?php
include 'conexao.php';

if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = "UPDATE clientes SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id";
    } else {
        // Inserir novo cliente
        $sql = "INSERT INTO clientes (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
    }
    
    if ($conexao->query($sql) === TRUE) {
        header("Location: clientes.php");
    } else {
        echo "Erro: " . $conexao->error;
    }
}

$conexao->close();
?>