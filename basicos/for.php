<?php

/* $array = [1,2,3,4,5,6,7];

//contador;condiçao;incremento
for($i = 0; $i < count($array) ; $i++){
    echo "imprima o contador $i <br>";
} */

//imprimindo numero par


$numeros = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

for($i = 0; $i < count($numeros); $i++){
    if($numeros[$i] % 2 == 0){
        echo "numro pares $numeros[$i]";
    }

    else if($numeros[$i] % 2 == 1){
        echo "numro impares $numeros[$i]";
    }

    else{
        echo "colocou algo errado lek";
    }
}