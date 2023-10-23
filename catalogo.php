<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catálogo de Nutricionista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styleGPT.css">
    <link rel="stylesheet" type="text/css" href="perfil.css">
    <link rel="stylesheet" type="text/css" href="catag.css">
</head>
  <body>
    <div>
        <h5 class="title">Catálogo de Nutricionistas</h5>
    </div>
      <div class="bg_tela">
          <div class="busca">
            <h5 class="titulo">Procure por um Nutricionista</h5>
            <input type="text" class="form-control" placeholder="Buscar por Nome">
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
    echo '<div class="testimonial-box1">';
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
?>
            </div>
      </div>
              </div>
          </div>
          </div>
      </div>
    <div>
  <div id="card">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="muswcu.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="wp4098405.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="natacao.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>