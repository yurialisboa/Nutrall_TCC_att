const ctx = document.getElementById('myChart').getContext("2d")

// Inicialmente, configure labels e data vazios
let labels = [];
let data = []; // Inicialmente, sem valor

const config = {
    type: 'line',
    data: {
        labels,
        datasets: [{
            data,
            label: "Clientes",
            borderColor: "#008B8B",
            backgroundColor: "#008B8B",
            pointBackgroundColor: "#008B8B",
            pointBorderColor: "#008B8B"
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: false,
                ticks: {
                    stepSize: 1,
                    font: {
                        size: 15
                    }
                },
            },
            x: { // Configurações do eixo X
                ticks: {
                    font: {
                        size: 16,
                        color: "#008B8B" // Defina a cor desejada para os rótulos do eixo X
                    }
                }
            }
        },
        title: {
            display: true,
            text: "Clientes",
            font: {
                size: 36,
                weight: 'bold'
            }
        }
    }
};

const myChart = new Chart(ctx, config);

// Função para buscar os dados do servidor
function fetchData() {
    fetch('grafico.php') // Substitua com o caminho correto para o arquivo PHP
        .then(response => response.json())
        .then(chartData => {
            // Atualiza labels e data com os dados recebidos
            labels = chartData.labels;
            
            // Converte os valores de novos clientes para números inteiros
            data = chartData.data.map(value => parseInt(value));
            
            // Atualiza o gráfico com os novos dados
            myChart.data.labels = labels;
            myChart.data.datasets[0].data = data;
            
            // Atualiza a escala y para mostrar apenas números inteiros
            myChart.options.scales.y.ticks.stepSize = 1;
            myChart.update();
        });
}

// Chame a função fetchData para buscar os dados iniciais
fetchData();
