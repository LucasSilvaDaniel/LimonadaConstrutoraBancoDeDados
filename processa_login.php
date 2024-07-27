<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome_login"];
    $senha = $_POST["senha_login"];

    // Escapando os dados para evitar SQL Injection
    $nome = $mysqli->real_escape_string($nome);

    $sql = "SELECT * FROM login WHERE nome = '$nome'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Verificando a senha
        if (password_verify($senha, $row["senha"])) {
            echo "Login realizado com sucesso!";
            // Aqui você pode redirecionar o usuário para uma página protegida ou inicializar a sessão
            session_start();
            $_SESSION['nome'] = $row['nome'];
            header("Location: pagina_protegida.php");
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Nenhum usuário encontrado com esse nome.";
    }

    $mysqli->close();
}
?>
