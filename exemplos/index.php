<?php

include 'classes/Cadeira.php';

$cadeira1 = new Cadeira('cinza' , 'couro',true); // não é mais variavel é um OBJETO
$cadeira2 = new Cadeira('preta' , 'plastico', false);

// var_dump($cadeira1);
// var_dump($cadeira2);

$cadeira1->sentar();

?>