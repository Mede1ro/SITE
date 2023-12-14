<?php
include_once '../Redirecionamento/Validacao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Style.css">
    <title>SosaBank</title>
</head>

<body>
    <div class="container-dashboard">
        <div class="conteudo-dashboard-menu">
            <div class="conteudo-dashboard-menu-titulo">
                <?php if ($userType === 'Igor') : ?>
                    <img src="../Assets/king.png" alt="">
                    <h2>Admin</h2>
                <?php else : ?>
                    <img src="../Assets/prince.png" alt="">
                    <h2>Inter</h2>
                <?php endif; ?>
            </div>
            <div class="conteudo-dashboard-menu-itens">
                <ul class="conteudo-dashboard-menu-item">
                    <li class="dashboard-item-link"><a href="/Pages/Dashboard.php"><img src="../Assets/dashboard.png" alt="">DASHBOARD</a></li>
                    <li class="dashboard-item-link"><a href="/Pages/Usuarios.php"> <img src="../Assets/group.png" alt=""> USUÁRIOS</a></li>
                    <li class="dashboard-item-link"><a href="/Pages/Contas.php"> <img src="../Assets/balance.png" alt=""> CONTAS</a></li>
                    <li class="dashboard-item-link <?php echo $userType === 'Luiz' ? 'hidden' : ''; ?>"><a href="/Pages/Transacoes.php"> <img src="../Assets/transfer.png" alt=""> TRANSAÇÕES</a></li>
                    <li class="dashboard-item-link <?php echo $userType === 'Luiz' ? 'hidden' : ''; ?>"><a href="/Pages/Logs.php"> <img src="../Assets/active.png" alt=""> LOGS</a></li>
                    <li class="dashboard-item-link deslogar"><a href="../Index.php" onclick="deslogar()"> <img src="../Assets/reject.png" alt=""> DESLOGAR</a></li>
                </ul>
            </div>
        </div>

        <div class="conteudo-dashboard">
            <div class="conteudo-dashboard-card">
                <div class="conteudo-dashboard-card titulo">
                    <h1>DASHBOARD | <span>TRANSAÇÕES</span></h1>
                </div>
                <div class="conteudo-dashboard-card-dados">
                    <table>
                        <thead>
                            <tr>
                                <th class="titulo" colspan="5">SISTEMA DE GERENCIAMENTO DE TRANSAÇÕES</th>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>Data</th>
                                <th>Hora</th>
                                <th>Descrição</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>1</td>
                            <td>2023-01-15</td>
                            <td>09:30:45</td>
                            <td>Compra Online</td>
                            <td>R$ -150.00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2023-01-18</td>
                                <td>15:20:10</td>
                                <td>Depósito</td>
                                <td>R$ 500.00</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>2023-02-05</td>
                                <td>12:45:30</td>
                                <td>Saque ATM</td>
                                <td>R$ -50.00</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>2023-02-12</td>
                                <td>18:10:15</td>
                                <td>Transferência para Maria</td>
                                <td>R$ -200.00</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>2023-03-02</td>
                                <td>14:55:22</td>
                                <td>Compra Supermercado</td>
                                <td>R$ -120.00</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>2023-03-10</td>
                                <td>10:30:05</td>
                                <td>Depósito</td>
                                <td>R$ 300.00</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>2023-03-15</td>
                                <td>08:15:40</td>
                                <td>Compra Eletrônicos</td>
                                <td>R$ -400.00</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>2023-04-01</td>
                                <td>09:40:18</td>
                                <td>Transferência para João</td>
                                <td>R$ -100.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>