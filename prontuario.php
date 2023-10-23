<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tcc";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$nome = $_POST['nome'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$datanasc = $_POST['dataNascimento'];
$genero = $_POST['genero'];
$tel = $_POST['telefone'];
$email = $_POST['email'];
$plano = $_POST['plano'];
$observacoes = $_POST['observacoes'];
$consulta = $_POST['dataConsulta'];


// SQL para inserir ou atualizar na tabela "formulário"
$sql = "INSERT INTO prontuário (nome, altura, peso, data_nascimento, genero, telefone, email, plano, observacoes, data_consulta)
        VALUES ('$nome', '$altura', '$peso', '$datanasc', '$genero', '$tel', '$email', '$plano', '$observacoes', '$consulta')";

// Execute a consulta SQL e trate os erros conforme necessário


if (mysqli_query($conn, $sql)) {
    echo "Dados inseridos com sucesso!";
    header("Location: LISTA-CLIENTES.php");
} else {
    echo "Erro ao inserir dados: " . mysqli_error($conn);
}

$conn->close();
?>
