<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Boas-vindas</title>
</head>
<body>
    <?php
    if (isset($_SESSION['nome'])) {
        echo "<h1>Seja bem-vindo(a), " . $_SESSION['nome'] . "!</h1>";
    } else {
        echo "<p>Nenhum usuário logado.</p>";
        echo '<a href="index.php">Voltar para o login</a>';
    }
    ?>
</body>
</html>
