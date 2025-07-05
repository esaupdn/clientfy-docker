<?php

$servidor = "db"; 


$usuario = "root"; 

$senha = "rootpassword"; 

/
$banco = "clientfy_db"; /

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>