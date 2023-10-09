<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id21371623_pedro"; // usuário do MySQL
$pass = "P&dro2323"; // senha do MySQL
$dbname = "id21371623_crud"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
