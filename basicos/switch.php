<?php

//switch imprime todos os valores caso algum dos cases seja satisfeito,uso o break pra quebrar isso
//usaria o switch no lugar de else if caso tenha muuitas condiçoes a serem analisadas

$b = 0;

switch($b){
    case 0: echo "deu 0 menzola";

    break;

    case 1: echo "deu 1";

//default usado quando nenhum case foi saciado,especie de else    
    default: echo "tem nao";
}