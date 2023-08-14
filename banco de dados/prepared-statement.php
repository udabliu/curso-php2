<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$nome = "suporte de microfone";
$descricao = 'suporte é novo';

$stmt = $conn->prepare("INSERT INTO teste (nome,descricao) VALUES (?,?)");

$stmt-> bind_param("ss",$nome,$descricao);

$stmt->execute();

