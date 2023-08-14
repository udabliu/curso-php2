<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

//instanciei o mysqli pra usar as propriedades de conexao com o banco de dados
$conn = new mysqli($host,$user,$pass,$db);


//criei uma condiçao de que se der erro emite uma mensagem
if($conn->connect_errno){
    echo "erro na conexao <br>";
    echo " erro:". $conn->connect_error;
}