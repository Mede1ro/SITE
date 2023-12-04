<?php
include_once '../Redirecionamento/Validacao.php';  // Substitua pelo caminho correto

$userType = isset($_SESSION["user_type"]) ? $_SESSION["user_type"] : "";


unset($_SESSION["user_type"]);

// Output HTML com classes ocultas
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>SosaBank</title>
</head>

<body>
    <div class="container-dashboard">
        <div class="conteudo-dashboard-menu">
            <!-- Seu menu aqui -->
            <div class="conteudo-dashboard-menu-titulo">
                <img src="../Assets/king.png" alt="">
                <h2>Admin</h2>
            </div>
            <div class="conteudo-dashboard-menu-itens">
                <ul class="conteudo-dashboard-menu-item">
                    <li class="dashboard-item-link"><a href="/Pages/Dashboard.php"><img src="../Assets/dashboard.png" alt="">DASHBOARD</a></li>
                    <li class="dashboard-item-link"><a href="#"> <img src="../Assets/group.png" alt=""> USUÁRIOS</a></li>
                    <li class="dashboard-item-link"><a href="/Pages/Contas.php"> <img src="../Assets/balance.png" alt=""> CONTAS</a></li>
                    <li class="dashboard-item-link <?php echo $userType === 'Luiz' ? 'hidden' : ''; ?>"><a href="/Pages/Transacoes.php"> <img src="../Assets/transfer.png" alt=""> TRANSAÇÕES</a></li>
                    <li class="dashboard-item-link <?php echo $userType === 'Luiz' ? 'hidden' : ''; ?>"><a href="/Pages/Logs.php"> <img src="../Assets/active.png" alt=""> LOGS</a></li>
                    <li class="dashboard-item-link deslogar"><a href="../Index.php"> <img src="../Assets/reject.png" alt=""> DESLOGAR</a></li>
                </ul>
            </div>
        </div>

        <div class="conteudo-dashboard">
            <div class="conteudo-dashboard-card">
                <div class="conteudo-dashboard-card titulo">
                    <h1>DASHBOARD | <span>NOTIFICAÇÕES DO SERVIDOR</span></h1>
                </div>
                <div class="conteudo-dashboard-card-dados">
                    <div class="alinhamento">
                        <ul class="notificacoes-lista">
                            <li>
                                <div class="notificacao-item status-servidor">
                                    <span class="data-hora">2023-04-15 10:25:30</span>
                                    <p class="mensagem">O servidor está funcionando corretamente.</p>
                                </div>
                            </li>
                            <li>
                                <div class="notificacao-item status-falha">
                                    <span class="data-hora">2023-04-14 15:40:22</span>
                                    <p class="mensagem">Falha no servidor. Entre em contato com o suporte.</p>
                                </div>
                            </li>
                            <li>
                                <div class="notificacao-item status-lag">
                                    <span class="data-hora">2023-04-14 18:12:50</span>
                                    <p class="mensagem">Lag detectado no servidor. Pode haver atrasos temporários.</p>
                                </div>
                            </li>
                            <li>
                                <div class="notificacao-item status-servidor">
                                    <span class="data-hora">2023-04-15 10:25:30</span>
                                    <p class="mensagem">O servidor está funcionando corretamente.</p>
                                </div>
                            </li>
                            <li>
                                <div class="notificacao-item status-falha">
                                    <span class="data-hora">2023-04-14 15:40:22</span>
                                    <p class="mensagem">Falha no servidor. Entre em contato com o suporte.</p>
                                </div>
                            </li>
                            <li>
                                <div class="notificacao-item status-lag">
                                    <span class="data-hora">2023-04-14 18:12:50</span>
                                    <p class="mensagem">Lag detectado no servidor. Pode haver atrasos temporários.</p>
                                </div>
                            </li>
                            <li>
                                <div class="notificacao-item status-servidor">
                                    <span class="data-hora">2023-04-15 08:15:40</span>
                                    <p class="mensagem">O servidor está funcionando corretamente.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="logs">
                        <div class="tempo-online">
                            <h1>Tempo Online do Servidor</h1>
                            <div class="grafico-container">
                                <canvas id="tempoOnline"></canvas>
                            </div>
                        </div>
                        <div class="max-ms">
                            <h2>Máxima de MS</h2>
                            <div class="grafico-container">
                                <canvas id="maxMS"></canvas>
                            </div>
                        </div>

                        <!-- Outros gráficos fictícios -->
                        <div class="info-import">
                            <h2>Outras Informações Importantes</h2>
                            <div class="grafico-container">
                                <canvas id="infoImportantes"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        var ctx = document.getElementById('tempoOnline').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00'],
                datasets: [{
                    label: 'Tempo Online (horas)',
                    data: [8, 10, 12, 14, 15, 18, 20, 22, 23, 23, 22, 20, 18, 16, 14, 12, 10, 8, 6, 4, 2, 1, 0, 0],
                    borderColor: '#4CAF50',
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 24
                    }
                }
            }
        });

        var ctxMaxMS = document.getElementById('maxMS').getContext('2d');
        var chartMaxMS = new Chart(ctxMaxMS, {
            type: 'line',
            data: {
                labels: ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00'],
                datasets: [{
                    label: 'Máxima de MS',
                    data: [20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100, 105, 110, 115, 120, 125, 130, 135],
                    borderColor: '#FFC107',
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 140
                    }
                }
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Script para gerar dados fictícios de informações importantes
            var dadosInfoImportantes = [];
            for (var i = 0; i < 24; i++) {
                // Gere dados fictícios para ilustrar diferentes informações
                var dado = Math.floor(Math.random() * 100) + 1;
                dadosInfoImportantes.push(dado);
            }

            // Gráfico de outras informações importantes
            var ctxInfoImportantes = document.getElementById('infoImportantes').getContext('2d');
            var chartInfoImportantes = new Chart(ctxInfoImportantes, {
                type: 'bar',
                data: {
                    labels: ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00'],
                    datasets: [{
                        label: 'Informações Importantes',
                        data: dadosInfoImportantes,
                        backgroundColor: '#2196F3',
                        borderColor: '#2196F3',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>