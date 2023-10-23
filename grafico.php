<?php
// Conexão com o banco de dados (substitua com suas próprias credenciais)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tcc";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão com o banco de dados falhou: " . $conn->connect_error);
}

// Defina a data de início como 30 dias atrás
$dataInicio = date('Y-m-d', strtotime('-30 days'));

// Consulta SQL para buscar dados da tabela prontuário dentro do intervalo de 30 dias e ordenar por data
$sql = "SELECT data_consulta, COUNT(*) as total FROM prontuário WHERE data_consulta >= '$dataInicio' GROUP BY data_consulta ORDER BY data_consulta";
$result = $conn->query($sql);

$chartData = array(
    'labels' => array(),
    'data' => array()
);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Extrai apenas o dia e o mês da data
        $dataConsulta = date_create($row['data_consulta']);
        $mesAbreviado = date_format($dataConsulta, "d/M");

        // Adicione o dia e o mês formatados aos labels
        $chartData['labels'][] = $mesAbreviado;

        // Adicione o total de novos clientes para a data
        $chartData['data'][] = $row['total'];
    }
}

// Fecha a conexão com o banco de dados
$conn->close();

// Retorna os dados como JSON
echo json_encode($chartData);
?>