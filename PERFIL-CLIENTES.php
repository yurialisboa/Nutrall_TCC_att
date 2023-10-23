<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCC</title>
    <!-- Estilos CSS -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" type="text/css" href="styleGPT.css">
    <link rel="stylesheet" type="text/css" href="perfil.css">
   
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
        <div class="card"><div class="bloco-cliente-titulo">
                        <h3 class="titulo">Perfil do cliente</h3>
                        <div class="sub-titulo">Veja as informações pessoais do seu cliente</div>
                    </div><div class="card-perfil">
            <img src="user.png" alt="">
            <div class="card-texto"><h3>Nicolas Gomes</h3><div class="card-info"><span class="material-symbols-outlined">
                mail
                </span><p>nicolasgomes@gmail.com</p><span class="material-symbols-outlined">
                    cake
                    </span><p>27/10/2003</p></div></div>

       </div>   <div class="conteudo" id="conteudo">
        <div class="info-card">
            <div class="info">
                <p>Nome:</p>
                <div class="cli-info">
                    <t>Rafael Machado</t>
                    <input type="text" class="input-edit" style="display:none;">
                </div>
                <span class="material-symbols-outlined edit" onclick="editarTexto(this)">edit</span>
            </div>
            <div class="info">
                <p>Gênero:</p>
                <div class="cli-info">
                    <t>Masculino</t>
                    <input type="text" class="input-edit" style="display:none;">
                </div>
                <span class="material-symbols-outlined edit" onclick="editarTexto(this)">edit</span>
            </div>
            <div class="info">
                <p>Altura:</p>
                <div class="cli-info">
                    <t>175 cm</t>
                    <input type="text" class="input-edit" style="display:none;">
                </div>
                <span class="material-symbols-outlined edit" onclick="editarTexto(this)">edit</span>
            </div>
            <div class="info">
                <p>Peso:</p>
                <div class="cli-info">
                    <t>70 kg</t>
                    <input type="text" class="input-edit" style="display:none;">
                </div>
                <span class="material-symbols-outlined edit" onclick="editarTexto(this)">edit</span>
            </div>
            <div class="info">
                <p>Nascimento:</p>
                <div class="cli-info">
                    <t>01/01/1990</t>
                    <input type="text" class="input-edit" style="display:none;">
                </div>
                <span class="material-symbols-outlined edit" onclick="editarTexto(this)">edit</span>
            </div>
        </div>

        <div class="info-card">
            <div class="info">
                <p>Celular:</p>
                <div class="cli-info">
                    <t>(123) 456-7890</t>
                    <input type="text" class="input-edit" style="display:none;">
                </div>
                <span class="material-symbols-outlined edit" onclick="editarTexto(this)">edit</span>
            </div>
            <div class="info">
                <p>Email:</p>
                <div class="cli-info">
                    <t>rafael@example.com</t>
                    <input type="text" class="input-edit" style="display:none;">
                </div>
                <span class="material-symbols-outlined edit" onclick="editarTexto(this)">edit</span>
            </div>
            <div class="info">
                <p>Endereço:</p>
                <div class="cli-info">
                    <t>Rua Exemplo, 123</t>
                    <input type="text" class="input-edit" style="display:none;">
                </div>
                <span class="material-symbols-outlined edit" onclick="editarTexto(this)">edit</span>
            </div>
            <div class="info">
                <p>Primeira consulta:</p>
                <div class="cli-info">
                    <t>02/02/2022</t>
                    <input type="text" class="input-edit" style="display:none;">
                </div>
                <span class="material-symbols-outlined edit cancer" onclick="editarTexto(this)">edit</span>
            </div>
            <div class="info">
                <p>Número de CPF:</p>
                <div class="cli-info">
                    <t>123.456.789-00</t>
                    <input type="text" class="input-edit" style="display:none;">
                </div>
                <span class="material-symbols-outlined edit" onclick="editarTexto(this)">edit</span>
            </div>
        </div>
    </div>

<div class="ver-mais" id="ver-mais">
    <span id="ver-mais-texto">Todas as informações</span>
    <span class="caret-wrapper"><i class="fas fa-chevron-down"></i></span>
</div>




         </div>
         <div class="cardapio">
         <div class="bloco-cliente-titulo">
                        <h3 class="titulo">Dieta do cliente</h3>
                        <div class="sub-titulo">Faça aqui o cardápio do seu cliente</div>
                    </div>
                    <div class="dieta">
                    <div class="dieta-titulo"><h3>Adicione uma refeição</h3></div>
                    <div class="dieta-bloco">

                    </div>
                    </div>                      
                </div>
         <script>
// script.js

// Função para alternar entre texto estático e campo de texto editável
function editarTexto(botao) {
    var infoCard = botao.closest('.info-card');
    var cliInfo = botao.previousElementSibling;
    var inputEdit = infoCard.querySelector('.input-edit');

    if (inputEdit.style.display === 'none') {
        // Mostra o campo de texto editável e oculta o texto estático
        inputEdit.style.display = 'inline-block';
        cliInfo.querySelector('t').style.display = 'none';

        // Preenche o campo de texto com o texto atual
        inputEdit.value = cliInfo.querySelector('t').textContent;

        // Coloca o foco no campo de texto
        inputEdit.focus();
    } else {
        // Salva o texto editado e exibe novamente o texto estático
        cliInfo.querySelector('t').textContent = inputEdit.value;
        inputEdit.style.display = 'none';
        cliInfo.querySelector('t').style.display = 'inline';
    }
}

</script>
        
         <script>    
// script.js
var conteudo = document.getElementById('conteudo');
var verMaisTexto = document.getElementById('ver-mais-texto');
var caretWrapper = document.querySelector('.caret-wrapper');
var caret = caretWrapper.querySelector('i');

document.getElementById('ver-mais').addEventListener('click', function() {
    if (conteudo.style.maxHeight === '0px' || conteudo.style.maxHeight === '') {
        conteudo.style.maxHeight = conteudo.scrollHeight + 'px';
        verMaisTexto.textContent = 'Menos informações';
        caret.classList.remove('fa-chevron-down');
        caret.classList.add('fa-chevron-up');
        caretWrapper.style.marginLeft = '5px'; // Adiciona margem à esquerda
    } else {
        conteudo.style.maxHeight = '0px';
        verMaisTexto.textContent = 'Todas as informações';
        caret.classList.remove('fa-chevron-up');
        caret.classList.add('fa-chevron-down');
        caretWrapper.style.marginLeft = '0'; // Remove a margem à esquerda
    }
});

</script>
    
        <!-- Prontuário Modal -->
        <div class="prontuario">
            <div id="form" class="modal">
                <div class="conteudo-modal">
                    <form action="prontuario.php" method="POST" enctype="multipart/form-data">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" placeholder="Insira aqui o seu nome." required><br>
                
                        <label for="dataNascimento">Data de Nascimento:</label>
                        <input type="date" id="dataNascimento" name="dataNascimento" required><br>
    
                        <label for="imagem">Foto de perfil:</label>
                        <input type="file" name="imagem" id="imagem" accept="image/*"><br>

                        <label for="genero">Gênero:</label>
                        <select id="genero" name="genero">
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        </select><br>
                        
                        <label for="endereco">Endereço:</label>
                        <textarea id="endereco" name="endereco" rows="4" cols="50" placeholder="Insira aqui o seu endereço."></textarea><br>
                
                        <div class="coiso">
                       
                        <label for="telefone">Telefone:</label>
                        <input type="tel" id="telefone" name="telefone" placeholder="xx xxxxx-xxxx"><br>
                
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="seumeail@webmail.com"><br>
                        </div>
                   
                        <label for="observacoes">Observações Gerais:</label>
                        <textarea id="observacoes" name="observacoes" rows="6" placeholder="Insira aqui as observações gerais." cols="50"></textarea><br>
                
                        <input type="submit" id="fecharModal" value="Salvar Prontuário">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript para mostrar/ocultar o modal -->
    
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
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

