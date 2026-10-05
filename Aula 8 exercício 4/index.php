<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['nome'])) {
    $_SESSION['nome'] = $_POST['nome'];
    header("Location: boasvindas.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 4 - Login</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome de usuário:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>
