<!-- 4. Definir duas variáveis peso e altura e exiba se esta pessoa está ou não
com seu peso ideal. Veja tabela da relação peso/altura
1. Resultado < 20 -> Abaixo do peso
2. Resultado >= 20 e Resultado <= 25 -> Peso Ideal
3. Resultado > 25 -> Acima do Peso -->
<?php
include 'classes/PesoIdeal.php';

$peso1 = new PesoIdeal(60,1.83);
$peso2 = new PesoIdeal(70,1.83);
$peso3 = new PesoIdeal(80,1.83);
$peso4 = new PesoIdeal(100,1.83);

$peso=[];
$peso[1] = $peso1;
$peso[2] = $peso2;
$peso[3] = $peso3;
$peso[4] = $peso4;

foreach ($peso as $p){
    if($p->calculoPesoIdeal() < 20){
        echo $p->calculoPesoIdeal() . " <20 => Abaixo do peso. <br>";
    }
    elseif($p->calculoPesoIdeal() >= 20 && $p->calculoPesoIdeal() <=25){
        echo $p->calculoPesoIdeal() . " >= 20 ou <=25  => Peso Ideal. <br>";
    }
    elseif($p->calculoPesoIdeal() > 25){
        echo $p->calculoPesoIdeal() . " >25  => Acima de peso. <br>";
    };
}
?>