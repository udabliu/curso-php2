<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$id = 4;

$stmt = $conn->prepare("UPDATE carros SET nome = ?, modelo = ? WHERE id = ?");

$nome = 'palio';
$modelo = "weekend";

$stmt->bind_param("ssi",$nome,$modelo,$id);


$stmt->execute();

//comando para mostrar uma mensagem caso dê erro
if($stmt->error){
  echo "erro:" . $stmt->error;
}
