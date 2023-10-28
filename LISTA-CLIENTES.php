<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCC</title>
    <!-- Estilos CSS -->
    
    <link rel="stylesheet" type="text/css" href="styleGPT.css">
    <!-- Ícones FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script>
        // Função para mostrar ou ocultar o pop-up
        function togglePopup() {
            var popup = document.getElementById('popup');
            popup.style.display = (popup.style.display === 'none' || popup.style.display === '') ? 'block' : 'none';
        }
    </script>
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
<form method="POST">
                                <input type="text" name="search_name" placeholder="Busque clientes pelo nome ou idade.">
                                <input type="submit" value="Pesquisar">
</form>
                            </div>
                        </div>
                        <!-- Lista de Clientes (PHP) -->
                        <div class="testimonial-box-container">
                            <?php
                            // Inclua o arquivo PHP que exibe os testemunhos
                            include("clientePRONTUARIO.php");
                            ?>                        
    
                        <!-- Adicionar Cliente -->
                            <a  class="testimonial-box1">
                                <div class="box-top"></div>
                                <div class="new-profile">
                                    <div class="new-name-user">
                                <i class="fas fa-user-plus"></i> <strong>Adicionar um cliente</strong></div>
                                </div>
                                <div id="popup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #fff; padding: 20px; border: 1px solid #ccc;">
        <p>Não foi possível encontrar este cliente.</p>
        <button onclick="togglePopup()">Fechar</button>
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

