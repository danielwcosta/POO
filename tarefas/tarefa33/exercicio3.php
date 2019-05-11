<!-- 3. Definir uma variável que receba um valor em dólares, calcule e exiba o
valor correspondente em Reais (R$). -->

<?php
include 'classes/ConverterDolar.php';

$dolar = 10;
$cambio = 3.97;

$reais = new ConverterDolar($dolar,$cambio);

echo $dolar . " dolares." . "equivalem " . "a tantos R$ " . $reais->conversao();   
?>