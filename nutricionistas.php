<?php
$servername = "localhost"; // Endereço do servidor MySQL
$username = "root"; // Substitua pelo seu nome de usuário do MySQL
$password = ""; // Substitua pela sua senha do MySQL
$dbname = "tcc"; // Substitua pelo nome do banco de dados onde você deseja criar a tabela

// Conecta ao servidor MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Query para criar a tabela "nutri"
$sql = "CREATE TABLE nutri (
    crn INT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    data_formacao DATE,
    genero ENUM('Masculino', 'Feminino')
)";

if ($conn->query($sql) === true) {
    echo "Tabela 'nutri' criada com sucesso.";
} else {
    echo "Erro ao criar a tabela: " . $conn->error;
}

// Fecha a conexão com o servidor MySQL
$conn->close();
?>
