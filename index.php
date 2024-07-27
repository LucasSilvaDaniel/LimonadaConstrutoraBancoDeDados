<!DOCTYPE html>
<html>
<head>
    <title>Cadastro e Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="divPaiCadastro">
        <h2>Cadastro de Usuário</h2>
        <form action="processa_cadastro.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br><br>
            
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required><br><br>
            
            <input type="submit" value="Cadastrar">
        </form>
    </div>
    
    <div class="divPailogin">
        <h2>Login</h2>
        <form action="processa_login.php" method="post">
            <label for="nome_login">Nome:</label>
            <input type="text" id="nome_login" name="nome_login" required><br><br>
            
            <label for="senha_login">Senha:</label>
            <input type="password" id="senha_login" name="senha_login" required><br><br>
            
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
