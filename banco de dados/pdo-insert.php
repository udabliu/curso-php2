<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$stmt = $conn->prepare("INSERT INTO teste (nome,descricao) VALUES (:nome,:descricao)");

$nome = "gol";
$descricao = "gol bolinha";

$stmt->bindParam(":nome",$nome);
$stmt->bindParam(":descricao",$descricao);


$stmt->execute();

