<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $cpf = $_POST["cpf"];

    // Aqui você pode adicionar código para validar os dados antes de inseri-los no banco de dados
    $nome = $mysqli->real_escape_string($nome);
    $senha = $mysqli->real_escape_string($senha);
    $cpf = $mysqli->real_escape_string($cpf);

    // Criptografando a senha antes de armazenar (opcional, mas recomendado)
    $senha = password_hash($senha, PASSWORD_BCRYPT);

    $sql = "INSERT INTO login (nome, senha, cpf) VALUES ('$nome', '$senha', '$cpf')";

    if ($mysqli->query($sql) === TRUE) {
        session_start();
        $_SESSION['nome'] = $nome;
        header("Location: pagina_protegida.php?success=1");
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
}
?>
