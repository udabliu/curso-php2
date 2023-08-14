<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$id = 1;


$stmt = $conn->prepare("SELECT * FROM teste WHERE id > :id");

$stmt->bindParam(":id",$id);

$stmt->execute();

//pdo fetch assoc é para os valores nao virem duplicados
// fetch para apenas 1 row
$data = $stmt->fetch(PDO:: FETCH_ASSOC);

print_r($data);

// fetchall para todos os itens
$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($itens);