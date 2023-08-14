<?php

$str = "carro - navio - moto - aviao - bicicleta";

$arr = explode(" - ", $str);

for($i = 0; $i < count($arr); $i++){
    echo "item $arr[$i] <br> ";
}