<?php
include 'classes/Pessoa.php';
include 'classes/Imc.php';


$pessoa = new Pessoa(70,1.70);
$imc = new Imc($pessoa);

echo $imc->calcular();