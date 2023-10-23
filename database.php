<?php
$servername = "localhost"; // Endereço do servidor MySQL
$username = "root"; // Substitua pelo seu nome de usuário do MySQL
$password = ""; // Substitua pela sua senha do MySQL

// Conecta ao servidor MySQL
$conn = new mysqli($servername, $username, $password);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Query para criar o banco de dados "tcc"
$sql = "CREATE DATABASE tcc";

if ($conn->query($sql) === true) {
    echo "Banco de dados 'tcc' criado com sucesso.";
} else {
    echo "Erro ao criar o banco de dados: " . $conn->error;
}

// Fecha a conexão com o servidor MySQL
$conn->close();
?>
