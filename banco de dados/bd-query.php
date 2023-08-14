<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

$q = "CREATE TABLE eu(idade INT,nome VARCHAR(200))";

//executei a query de select dentro da variavel $sql
$conn->query($q);


$conn->close();