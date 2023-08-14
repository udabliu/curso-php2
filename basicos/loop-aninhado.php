<?php

$i = 0;


while($i < 10){

    echo "loop externo $i <br>";

    $i++;

    $i2 = 0;

    while($i2 < 3){
        echo "loop interno $i2 <br>";
        $i2++;
    }
    
    
}