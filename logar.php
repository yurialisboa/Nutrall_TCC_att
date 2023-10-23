<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root"; // Nome de usuário do MySQL
    $password = "";     // Senha do MySQL (neste caso, sem senha)
    $dbname = "tcc";

    // Conecte ao banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Obtenha os dados do formulário
    $email = $_POST["email"];
    $password = $_POST["senha"];

    // Consulta SQL para verificar o usuário
    $sql = "SELECT * FROM usuario WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["senha"])) {
            echo "Login realizado com sucesso!";
            // Você pode redirecionar o usuário para a página de perfil, por exemplo.
        } else { 
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    // Feche a conexão com o banco de dados
    $conn->close();
}
?>
