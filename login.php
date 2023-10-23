<?php
$servername = "localhost";
$username = "root"; // Nome de usuário do MySQL
$password = "";     // Senha do MySQL (neste caso, sem senha)
$dbname = "tcc";

// Conectando ao servidor MySQL
$conexao = mysqli_connect($servername, $username, $password, $dbname);

// Verificando a conexão
if (!$conexao) {
    die("Erro na conexão com o servidor MySQL: " . mysqli_connect_error());
}

// Query SQL para criar o banco de dados "tcc"
$sql_database = "CREATE DATABASE IF NOT EXISTS tcc";

if (mysqli_query($conexao, $sql_database)) {
    echo "Banco de dados 'tcc' criado com sucesso!<br>";
} else {
    echo "Erro ao criar o banco de dados: " . mysqli_error($conexao);
}

// Conectando ao banco de dados "findsports"
$banco_dados = "tcc";
mysqli_select_db($conexao, $banco_dados);

// Query SQL para criar a tabela "usuario"
$sql_tabela = "CREATE TABLE IF NOT EXISTS usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
)";

// Executando a consulta
if (mysqli_query($conexao, $sql_tabela)) {
    echo "Tabela 'usuario' criada com sucesso!";
} else {
    echo "Erro ao criar a tabela 'usuario': " . mysqli_error($conexao);
}

// Fechando a conexão com o servidor MySQL
mysqli_close($conexao);
?>
