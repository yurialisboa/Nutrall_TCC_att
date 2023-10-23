<?php
// Configurações de conexão com o banco de dados
$servername = "localhost"; // Nome do servidor do banco de dados
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$database = "tcc"; // Nome do banco de dados

// Conecta ao banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta SQL para buscar a quantidade total de clientes por data de nascimento
$sql = "SELECT data_nascimento, COUNT(*) AS total FROM prontuário GROUP BY data_nascimento";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Inicializa um array para armazenar os resultados
    $data = array();

    while ($row = $result->fetch_assoc()) {
        $data[] = array(
            "data_nascimento" => $row["data_nascimento"],
            "total" => $row["total"]
        );
    }

    // Converte o array em formato JSON e imprime
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    // Se não houver dados, imprima um JSON vazio
    echo "[]";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
