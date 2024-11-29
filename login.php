<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    
    <form action="login.php" method="post">
        <h2>Login</h2>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        <button type="submit">Entrar</button>
        <p>Não tem uma conta? <a href="formcadastro.php">Cadastre-se</a></p>
    <?php
    include 'conexao.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
    
        
        $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
        $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "Login bem-sucedido!";
        header('location:index.html');
    } else {
        echo "Email ou senha inválidos";
    }
}
    ?>
    </form>
</body>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f5ff;
}

h2 {
    color: #007bff;
}

form {
    max-width: 300px;
    padding-left: 30px;
    padding-right: 50px;
    padding-top: 30px;
    padding-bottom: 30px;
    margin: 0 auto;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #007bff; 
    color: #fff; 
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #0069d9; 
}

a {
    color: #007bff; 
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

h4{
    color: #007bff;
}
</style>
</html>
