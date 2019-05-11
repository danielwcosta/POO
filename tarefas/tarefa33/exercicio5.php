<!-- 5. Definir três variáveis peso, altura, gênero e exiba se esta pessoa está ou
não com seu peso ideal. Veja tabela da relação peso/altura
1. Masculino
i. Resultado < 20 -> abaixo do peso
ii. Resultado >= 20 e Resultado <= 25 -> Peso Ideal
iii. Resultado > 25 -> Acima do Peso
2. Feminino
i. Resultado < 19 -> abaixo do peso
ii. Resultado >= 19 e Resultado <= 24 -> Peso Ideal
iii. Resultado > 24 -> Acima do Peso -->

<?php
include "classes/GeneroIMC.php";


$peso1 = new GeneroIMC(60,1.83,'masculino');
$peso2 = new GeneroIMC(70,1.83,'masculino');
$peso3 = new GeneroIMC(80,1.83,'masculino');
$peso4 = new GeneroIMC(100,1.83,'masculino');
$peso5 = new GeneroIMC(45,1.60,'feminino');
$peso6 = new GeneroIMC(55,1.60,'feminino');
$peso7 = new GeneroIMC(60,1.60,'feminino');
$peso8 = new GeneroIMC(70,1.60,'feminino');

$peso=[];
$peso[1] = $peso1;
$peso[2] = $peso2;
$peso[3] = $peso3;
$peso[4] = $peso4;
$peso[5] = $peso5;
$peso[6] = $peso6;
$peso[7] = $peso7;
$peso[8] = $peso8;

// print_r($peso);
foreach ($peso as $p){
    
    if($p->genero() == 'masculino'){
        echo "HOMEM => ";
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

    if($p->genero() == 'feminino'){
        echo "MULHER => ";
        if($p->calculoPesoIdeal() < 19){
            echo $p->calculoPesoIdeal() . " <19 => Abaixo do peso. <br>";
        }
        elseif($p->calculoPesoIdeal() >= 19 && $p->calculoPesoIdeal() <=24){
            echo $p->calculoPesoIdeal() . " >= 19 ou <=24  => Peso Ideal. <br>";
        }
        elseif($p->calculoPesoIdeal() > 24){
            echo $p->calculoPesoIdeal() . " >24  => Acima de peso. <br>";
        };
    }
}
?>