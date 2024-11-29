<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro</title>

</head>
<body>
    <div class="container">
        
        <form method="post" action="cadastro.php">
            <h2>Cadastro</h2>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

.container {
    width: 300px;
    margin: 0 auto;
    padding: 30px;
    padding-right: 50px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

h2 {
    
    color: #007bff;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #23527c;
}
</style>
</html>