<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCC</title>
    <!-- Estilos CSS -->
    
    <link rel="stylesheet" type="text/css" href="styleGPT.css">
    <link rel="stylesheet" type="text/css" href="stylebusca.css">
    <!-- Ícones FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <!-- Navegação Vertical -->
    <nav class="nav-vertical">
        <ul>
            <li class="masterchef">
                <a href="#" class="logo">
                    <img src="logo.jpg" alt="Logo">
                    <span class="nav-item">NutrAll</span>
                </a>
            </li>
            <!-- Links de Navegação -->
            <li><a href="#"><i class="fas fa-home"></i> <span class="nav-item">Página Inicial</span></a></li>
            <li><a href="#"><i class="fas fa-user"></i> <span class="nav-item">Clientes</span></a></li>
            <li><a href="#"><i class="fas fa-wallet"></i> <span class="nav-item">Wallet</span></a></li>
            <li><a href="#"><i class="fas fa-chart-bar"></i> <span class="nav-item">Analytics</span></a></li>
            <li><a href="#"><i class="fas fa-tasks"></i> <span class="nav-item">Dietas</span></a></li>
            <li><a class="logout"><i class="fas fa-user-plus"></i> <span class="nav-item">Cadastrar Cliente</span></a></li>
        </ul>
    </nav>

    <!-- Cabeçalho -->
    <div class="hero"> 
        <nav class="header">
            <div class="navegar1">  
                <div class="nome-consultorio">
                    <h1>Consultório Online</h1>
                </div>
            </div>
            <div class="navegar2">
                <div class="caixa"  onclick="toggleMenu()">
                    <img src="pedro.jpg" class="user-pic">
                    <h3 class="name">Pedro Montanaro</h3>
                    <b class="caret"></b>
                </div>
            </div>
            <!-- Submenu -->
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <a href="#" class="sub-menu-link">
                        <i class="fas fa-user"></i> <p>Editar perfil</p> <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <i class="fas fa-cog"></i> <p>Configurações</p> <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <i class="fas fa-question-circle"></i> <p>Ajuda</p> <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <i class="fas fa-sign-out-alt"></i> <p>Sair</p> <span>></span>
                    </a>
                </div>
            </div>
            <script>
                    let subMenu = document.getElementById("subMenu");
            
                    function toggleMenu(){
                        subMenu.classList.toggle("open-menu");
                    }
                </script>
        </nav>
    
        <!-- Conteúdo Principal -->
        <div class="tela">
            <div class="tela1">
                <!-- Lista de Clientes -->
                <div class="clientes">
                    <div class="bloco-cliente-titulo">
                        <h3 class="titulo">Os seus clientes</h3>
                        <div class="sub-titulo">Veja as informações dos seus clientes</div>
                    </div>
                    <div class="bloco-cliente">
                    <div class="pesquisa1">
                        <div class="pesquisa">
                            <form action="" method="POST">
                                <input type="text" name="termo" placeholder="Busque clientes pelo nome, data de nascimento ou genero.">
                                <button type="submit" class="btn">Pesquisar</button>
                                <?php
// Conexão com o banco de dados ou inclusão do arquivo com os dados dos clientes
// Substitua as informações abaixo pelas configurações do seu banco de dados
    $servername = "localhost";
    $username = "root"; // Nome de usuário do MySQL
    $password = "";     // Senha do MySQL (neste caso, sem senha)
    $dbname = "tcc";

// Conectar ao banco de dados
$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
}

// Inicializar a variável de resultados
$resultados = '';

// Verificar se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recuperar o termo de pesquisa
    if (isset($_POST['termo'])) {
        $termo = $_POST['termo'];

        // Consulta SQL para buscar clientes com base no termo de pesquisa
        $sql = "SELECT * FROM prontuário WHERE nome LIKE '%$termo%' OR data_nascimento LIKE '%$termo%' OR genero LIKE '%$termo%'";

        $result = $mysqli->query($sql);

        if ($result) {
            // Montar os resultados da pesquisa
            while ($row = $result->fetch_assoc()) {
                $resultados .= "Nome: " . $row['nome'] . "<br>";
                $resultados .= "Idade: " . $row['data_nascimento'] . "<br>";
                // Adicione aqui outros detalhes do cliente que você deseja exibir
                $resultados .= "<hr>";
            }
        } else {
            $resultados = "Nenhum resultado encontrado.";
        }
    }
}

// Fechar a conexão com o banco de dados
$mysqli->close();
?>


                        </form>
                        </div>
                    </div>

                        
                        <!-- Lista de Clientes (PHP) -->
                        <div class="testimonial-box-container">

                        <div class="resultados">
                                <?php echo $resultados; ?>
                        </div>
                            <?php
                            // Inclua o arquivo PHP que exibe os testemunhos
                            include("clientePRONTUARIO.php");
                            ?>
                            <script src="foto.js"></script>
                        
    
                        <!-- Adicionar Cliente -->
                            <a  class="testimonial-box1">
                                <div class="box-top"></div>
                                <div class="new-profile">
                                    <div class="new-name-user">
                                <i class="fas fa-user-plus"></i> <strong>Adicionar um cliente</strong></div>
                                </div>
                </a>
                    </div>
                    </div>
                </div>
            </div>
    
            <!-- Filtrar Clientes -->
            <div class="tela2">
                <div class="filtrar">
                    <div class="cartao-filtro">
                        <div class="filtrar-titulo"></div>
                        <h3 class="titulo">Filtrar clientes</h3>
                        <div class="sub-titulo">Filtre seus clientes de acordo com o objetivo ou consulta</div>
                        <div class="filtrar-escolha"> 
                            <select id="filtrar" name="filtrar">
                                <option value="todos">Todos os clientes</option>
                                <option value="hipertrofia">Hipertrofia</option>
                                <option value="emagrecimento">Emagrecimento</option>
                                <option value="composicao">Melhora da composição corporal</option>
                                <option value="saude">Saúde</option>
                                <option value="manutencao">Manutenção do peso</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="filtrar9">
                <h3 class="titulo">Histórico de clientes</h3>
                <div class="sub-titulo">Veja no gráfico o histórico de cadastro dos seus clientes</div>                               
                <br>                   
                <canvas id="myChart"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>
                <script src="clientes.js"></script>
                </div>
            </div>
        </div>
    
        <!-- Prontuário Modal -->
        <div class="prontuario">
            <div id="form" class="modal">
                <div class="conteudo-modal">
                    <form action="prontuario.php" method="POST" enctype="multipart/form-data">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" placeholder="Insira aqui o seu nome." required><br> 
                        
                        <div class="coiso">
                       
                        <label for="altura">Altura:</label>
                        <input type="text" id="altura" name="altura" placeholder="Em centímetros."><br>
                
                        <label for="peso">Peso:</label>
                        <input type="text" id="peso" name="peso" placeholder="Seu kilograma."><br>
                        </div>
                       
                        <label for="dataNascimento">Data de Nascimento:</label>
                        <input type="date" id="dataNascimento" name="dataNascimento" required><br>
                       
                        <label for="genero">Gênero:</label>
                        <select id="genero" name="genero">
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        </select><br>
                        
                       
                        <div class="coiso">
                       
                        <label for="telefone">Telefone:</label>
                        <input type="tel" id="telefone" name="telefone" placeholder="xx xxxxx-xxxx"><br>
                
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="seumeail@webmail.com"><br>
                        </div>

                        <label for="plano">Plano da dieta:</label>
                        <select id="plano" name="plano">
                                <option value="hipertrofia">Hipertrofia</option>
                                <option value="emagrecimento">Emagrecimento</option>
                                <option value="composição">Melhora da composição corporal</option>
                                <option value="saúde">Saúde</option>
                                <option value="manutenção">Manutenção do peso</option>                            
                        </select><br>
                   
                        <label for="observacoes">Observações Gerais:</label>
                        <textarea id="observacoes" name="observacoes" rows="6" placeholder="Insira aqui as observações gerais." cols="50"></textarea><br>
                       
                        <label for="dataNascimento">Consulta feita em:</label>
                        <input type="date" id="dataConsulta" name="dataConsulta" required><br>
                      
                        <input type="submit" id="fecharModal" value="Salvar Prontuário">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript para mostrar/ocultar o modal -->
    <script>
        const divClicavel = document.querySelector('.testimonial-box1');
        const modal = document.querySelector('.modal');
        const fecharModal = document.getElementById('fecharModal');

        divClicavel.addEventListener('click', () => {
            modal.style.display = 'flex';
        });

        modal.addEventListener('click', (event) => {
            // Verifique se o clique ocorreu fora do conteúdo do formulário
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    </script>

<script>
        const divClica = document.querySelector('.logout');
        const modal1 = document.querySelector('.modal');
        const fecharModal1 = document.getElementById('fecharModal');

        divClica.addEventListener('click', () => {
            modal1.style.display = 'flex';
        });

        modal1.addEventListener('click', (event) => {
            // Verifique se o clique ocorreu fora do conteúdo do formulário
            if (event.target === modal1) {
                modal1.style.display = 'none';
            }
        });
    </script>
    
</body>
</html>

