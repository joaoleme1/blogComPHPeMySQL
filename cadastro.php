<?php
// Inclui o arquivo de configuração
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Insere os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso! Faça login.";
        header("Location: login.php"); // Redireciona para a página de login
    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }
}
?>
