<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$id = 2;
$nome = "palio";
$descricao = "weekend";

$stmt = $conn->prepare("UPDATE teste SET nome = :nome, descricao = :descricao WHERE id = :id");

$stmt->bindParam(":id",$id);
$stmt->bindParam(":nome",$nome);
$stmt->bindParam(":descricao",$descricao);


$stmt->execute();



