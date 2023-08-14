<?php

// jeito que eu desenvolvi
function contadorDeStrings($letraDesejada){
    $frase = "negocio doido e cabuloso daquele naipe q ce conhece bem meua migo";
    $letrasA = [];

    // for para percorrer cada letra individualmente
    for($i = 0; $i < strlen($frase); $i++){ 
        if ($frase[$i] === $letraDesejada){
            array_push($letrasA,$frase[$i]);
        }  
    }
    print_r(count($letrasA));

    echo "<br>";

}

// letra que viria do html(usuario colocaria)
contadorDeStrings("m");




//jeito do professor ---------------------------------------------------------------------------------------------------------------------------------------------


    $frase2 = "o rato roeu a roupa do rei de roma";
    $contadorDeAs = 0;
    for($i = 0; $i < strlen($frase2); $i++){
        if($frase2[$i] === "a"){
            $contadorDeAs ++;
        }
    }

    echo "numero q a letra desejada apareceu $contadorDeAs";

