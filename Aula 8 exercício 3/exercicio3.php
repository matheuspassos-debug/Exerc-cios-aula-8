<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Primeiro número:</label>
        <input type="number" id="num1" name="num1" step="any" required>
        <br><br>
        <label for="num2">Segundo número:</label>
        <input type="number" id="num2" name="num2" step="any" required>
        <br><br>
        <input type="submit" value="Somar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['num1'], $_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $soma = $num1 + $num2;

        print "<p>A soma é: " . $soma . "</p>";

        var_dump($num1);
        print "<br>";
        var_dump($num2);
        print "<br>";
        var_dump($soma);
    }
    ?>
</body>
</html>
