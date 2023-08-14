<?php

$pessoa = [
    'nome' => 'ulisso',
    'ano-nascimento' => 1999,
    'olhos' => 'pretos'
];

$nome = $pessoa['nome'];
$nascimento = $pessoa['ano-nascimento'];
$ano_atual = 2023;

$idade = $ano_atual - $nascimento;


if ($idade < 18) {
    echo 'ulisso é menor de 18 anos';
} else {
    echo 'ulisso é maior de 18 anos,ta véio';
}
