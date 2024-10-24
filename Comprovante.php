<?php

$Quantidade1 = $_POST["Quantidade1"];
$Quantidade2 = $_POST["Quantidade2"];
$Quantidade3 = $_POST["Quantidade3"];
$Quantidade4 = $_POST["Quantidade4"];
$Quantidade5 = $_POST["Quantidade5"];
$Quantidade6 = $_POST["Quantidade6"];
$obs = $_POST["obs"];
$valorTotal = 0.00;

if (isset($_POST["XBurguer"])) {
    $valorTotal += (8.50 * $Quantidade1);
}

if (isset($_POST["XSalada"])) {
    $valorTotal += (7.60 * $Quantidade2);
}

if (isset($_POST["Xtudo"])) {
    $valorTotal += (10.50 * $Quantidade3);
}

if (isset($_POST["Coca"])) {
    $valorTotal += (9.60 * $Quantidade4);
}

if (isset($_POST["Conquista"])) {
    $valorTotal += (7.50 * $Quantidade5);
}

if (isset($_POST["Fanta"])) {
    $valorTotal += (8.20 * $Quantidade6);
}

echo "Pedido realizado com sucesso!<br>";
echo "Sua conta ficoyu em R$: ", $valorTotal;
echo "<br>obs: ", $obs;
echo "<br><a href='Cardapio.html'>Voltar</a>";
?>