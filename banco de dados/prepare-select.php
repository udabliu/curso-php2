<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$nome = "suporte de microfone";
$descricao = 'suporte é novo';

$id = 1;

//query
$stmt = $conn->prepare("SELECT * FROM carros WHERE id == ?");

//passei um parametro i(integer e depois a variavel)
$stmt->bind_param("i",$id);

//executei a query 
$stmt->execute();

//peguei o resultado(atraves do stmt->getresult) e joguei dentro da variavel result
$result = $stmt->get_result();

$data = $result->fetch_all();

print_r($data);