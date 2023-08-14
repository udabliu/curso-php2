<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$q = "SELECT * FROM carros";

$result = $conn->query($q);


$conn->close();
//selecionar somente 1 item do bd
$item = $result->fetch_assoc();

print_r($item);

//seleciona todos os items do bd selecionado
$itens = $result->fetch_all();

print_r($itens);

