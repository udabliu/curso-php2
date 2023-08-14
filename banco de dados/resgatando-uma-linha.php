<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$ano = 2010;

$stmt = $conn->prepare("SELECT * FROM carros WHERE ano = $ano");

//$stmt->bind_param("i",$ano);

$stmt->execute();

$result = $stmt->get_result();

$carro = $result->fetch_row();

print_r($carro);

$conn->close();