<?php
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];

echo "Nome: " . $nome . "<br>";
echo "Cidade: " . $cidade . "<br>";

if ($cidade == "Curitiba" || strtolower($cidade) == "curitiba") {
    echo "Curitibano!";
}
?>
