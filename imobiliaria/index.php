<?php

include 'classes/Terreno.php';

// obtendo os dados formulario
// $areaMinima = $_POST['area_minima'];
$areaMinima = 1000;

// instanciando objeto
$terreno1 = new Terreno(100, 10, 50);
$terreno2 = new Terreno(110, 20, 50);
$terreno3 = new Terreno(120, 50, 50);

// criando lista (array) e atribuindo os objetos
$listaTerrenos = [];
$listaTerrenos[1] = $terreno1;
$listaTerrenos[2] = $terreno2;
$listaTerrenos[3] = $terreno3;

foreach ($listaTerrenos as $t){
    if($t->calcularArea() >= $areaMinima){
        echo $t->calcularArea() . "<br>";
    }
}

?>