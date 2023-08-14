<?php
//criei o objeto pessoa com metodo falar
class Pessoa {

    function falar(){
        echo 'eu falo menzola';
    }
}

//joguei as funcionalidades do objeto pra dentro da variavel $ulisses
$ulisses = new Pessoa();

//chamei o metodo falar
$ulisses->falar();