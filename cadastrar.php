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
    $name = $_POST["nome"];
    $email = $_POST["email"];
    $password = password_hash($_POST["senha"], PASSWORD_BCRYPT); // Armazene a senha de forma segura

    // Insira os dados na tabela "users"
    $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === true) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar o usuário: " . $conn->error;
    }

    // Feche a conexão com o banco de dados
    $conn->close();
}
?>
