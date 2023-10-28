<?php
// Conexão com o banco de dados (substitua com suas próprias informações)
$conexao = new mysqli("localhost", "root", "", "tcc");

// Verifica se a conexão foi estabelecida com sucesso
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

$showPopup = false; // Variável para controlar a exibição do pop-up

if (isset($_POST['search_name'])) {
    $search_name = $_POST['search_name'];

    // Consulta SQL para buscar os registros com o nome pesquisado
    $sql = "SELECT nome, crn, genero, data_formacao FROM nutri WHERE nome = '%$search_name%'";
    
    $resultado = $conexao->query($sql);
    
    if ($resultado->num_rows > 0) {
        // Exibir os resultados da pesquisa
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
            $data_consulta_formatada = date('d/m/Y', strtotime($linha['data_formacao']));
            
            echo '<p>Nutricionista desde: ' . $data_consulta_formatada . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        $showPopup = true; // Nenhum usuário encontrado, mostrar pop-up
    }
} else {
    // Consulta SQL para buscar todos os registros
    $sql = "SELECT nome, crn, genero, data_formacao FROM nutri";
    $resultado = $conexao->query($sql);
    
    // Exibir todos os resultados
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
        $data_consulta_formatada = date('d/m/Y', strtotime($linha['data_formacao']));
        
        echo '<p>Última consulta: ' . $data_consulta_formatada . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

// Feche a conexão com o banco de dados
$conexao->close();

// Se a variável $showPopup for verdadeira, exibe o pop-up
if ($showPopup) {
    echo '<script>';
    echo 'alert("Não foi possível encontrar este cliente.");';
    echo '</script>';
}
?>
