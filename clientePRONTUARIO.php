<?php
// Conexão com o banco de dados (substitua com suas próprias informações)
$conexao = new mysqli("localhost", "root", "", "tcc");

// Verifica se a conexão foi estabelecida com sucesso
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

// Consulta SQL para buscar os dados
$sql = "SELECT nome, genero, data_consulta FROM prontuário";
$resultado = $conexao->query($sql);

// Loop para exibir os dados
while ($linha = $resultado->fetch_assoc()) {
    echo '<div class="testimonial-box">';
    echo '<div class="box-top">';
    echo '<div class="profile">';
    echo '<div class="profile-img">';
    
    // Lógica para definir a imagem com base no gênero
    if ($linha['genero'] === 'masculino') {
        $imagemGenero = 'man.png'; // Imagem masculina
    } else if ($linha['genero'] === 'feminino') {
        $imagemGenero = 'woman.png'; // Imagem feminina
    } else {
        $imagemGenero = 'padrao.jpg'; // Imagem padrão para outros valores de gênero
    }
    
    echo '<img src="' . $imagemGenero . '" alt="' . $linha['nome'] . '">';
    
    echo '</div>';
    echo '<div class="name-user">';
    echo '<strong>' . $linha['nome'] . '</strong>';
    echo '<span>' . $linha['genero'] . '</span>';
    
    // Converter e formatar a data
    $data_consulta_formatada = date('d/m/Y', strtotime($linha['data_consulta']));
    
    echo '<p>Última consulta: ' . $data_consulta_formatada . '</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

// Feche a conexão com o banco de dados
$conexao->close();