<!-- 1. Definir duas variáveis base e altura para calcular e exibir a área de um
retângulo. -->


<?php
include 'classes/AreaRetangulo.php';

$Area = new AreaRetangulo(10,20);

echo "A area do retangulo é " . $Area->calcularArea();

?>