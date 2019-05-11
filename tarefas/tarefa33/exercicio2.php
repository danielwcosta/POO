<!-- 2. Definir uma variável aresta para calcular a área de um quadrado. -->

<?php
include 'classes/AreaQuadrado.php';

$Area = new AreaQuadrado(5.5986);

echo $Area->calcularArea();

?>