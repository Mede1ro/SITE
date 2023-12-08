<?php
include_once '../Redirecionamento/Validacao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Style.css">
    <link rel="shortcut icon" href="../Assets/cocaina.png" type="image/x-icon">
    <title>SosaBank</title>
</head>

<body>
    <div class="container-dashboard">
        <div class="conteudo-dashboard-menu">
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
                    <h1>DASHBOARD | <span>ANÁLISE DE DADOS</span></h1>
                </div>
                <div class="conteudo-dashboard-card-dados">
                    <div class="cards">
                        <img src="../Assets/silhueta-do-grupo-de-usuarios (1).png" alt="">
                        <h2>12.500</h2>
                        <p>FUNCIONÁRIOS ATIVOS</p>
                    </div>
                    <div class="cards">
                        <img src="../Assets/botao-mais.png" alt="">
                        <h2>78.295</h2>
                        <p>CONTAS NOVAS</p>
                    </div>
                    <div class="cards">
                        <img src="../Assets/botao-de-menos.png" alt="">
                        <h2>10.324</h2>
                        <p>CONTAS CANCELADAS</p>
                    </div>
                    <div class="cards">
                        <img src="../Assets/dolar.png" alt="">
                        <h2>R$ 593.239.473</h2>
                        <p>MONTANTE TOTAL</p>
                    </div>
                </div>
                <div class="conteudo-dashboard-card-loading">
                    <div class="loading"></div>
                    <p>Carregando Dados do Sistema</p>
                </div>

                <div class="container-dashboard-lateral">
                    <div class="conteudo-dashboard-lateral">
                        <div class="loading"></div>
                        <p>Carregando Dados do Sistema</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>