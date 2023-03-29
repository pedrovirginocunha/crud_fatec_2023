<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id19500520_user"; // usuário do MySQL
$pass = "Xitn^Gbvn3V9Kg<)"; // senha do MySQL
$dbname = "id19500520_db"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
