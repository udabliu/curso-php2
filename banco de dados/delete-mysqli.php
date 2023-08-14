<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$nome = "palio";

$stmt = $conn->prepare("DELETE FROM carros WHERE nome = ?");

//passo os parametros p query
$stmt->bind_param("s",$nome);

$stmt->execute();


$conn->close();