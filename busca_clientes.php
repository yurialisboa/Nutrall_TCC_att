<?php
// Conexão com o banco de dados ou inclusão do arquivo com os dados dos clientes
// Substitua as informações abaixo pelas configurações do seu banco de dados
    $servername = "localhost";
    $username = "root"; // Nome de usuário do MySQL
    $password = "";     // Senha do MySQL (neste caso, sem senha)
    $dbname = "tcc";

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Recuperar o termo de pesquisa
if (isset($_POST['termo'])) {
    $termo = $_POST['termo'];
    
    // Consulta SQL para buscar clientes com base no termo de pesquisa
    $sql = "SELECT * FROM prontuário WHERE nome LIKE '%$termo%' OR data_nascimento LIKE '%$termo%' OR genero LIKE '%$termo%'";

    $result = $conn->query($sql);

    if ($result) {
        // Exibir os resultados da pesquisa
        while ($row = $result->fetch_assoc()) {
            echo "Nome: " . $row['nome'] . "<br>";
            echo "Idade: " . $row['data_nascimento'] . "<br>";
            // Adicione aqui outros detalhes do cliente que você deseja exibir
            echo "<hr>";
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }
    
    // Fechar a conexão com o banco de dados
    $conn->close();
}
?>
