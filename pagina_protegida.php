<?php
session_start();

if (!isset($_SESSION['nome'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página Protegida</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .mensagem {
            color: green;
            margin-bottom: 20px;
        }
        .bemVindo {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .logout {
            text-decoration: none;
            color: #fff;
            background-color: #007BFF;
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_GET['success'])) {
            echo '<div class="mensagem">Conta criada com sucesso!!</div>';
        }
        ?>
        <div class="bemVindo">Bem-vindo, <?php echo $_SESSION['nome']; ?></div>
        <a class="logout" href="logout.php">Logout</a>
    </div>
</body>
</html>
