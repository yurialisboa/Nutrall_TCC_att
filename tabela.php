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

// Query para criar a tabela "prontuário"
$sql = "CREATE TABLE prontuário (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    altura DECIMAL(5, 2),
    peso DECIMAL(5, 2),
    data_nascimento DATE,
    genero ENUM('Masculino', 'Feminino'),
    telefone VARCHAR(15),
    email VARCHAR(255),
    plano VARCHAR(50),
    observacoes TEXT,
    data_consulta DATE
)";

if ($conn->query($sql) === true) {
    echo "Tabela 'prontuário' criada com sucesso.";
} else {
    echo "Erro ao criar a tabela: " . $conn->error;
}

// Fecha a conexão com o servidor MySQL
$conn->close();
?>
