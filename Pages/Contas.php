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
                    <li class="dashboard-item-link deslogar"><a href="../Index.php"> <img src="../Assets/reject.png" alt=""> DESLOGAR</a></li>
                </ul>
            </div>
        </div>
        <div class="conteudo-dashboard">
            <div class="conteudo-dashboard-card">
                <div class="conteudo-dashboard-card titulo">
                    <h1>DASHBOARD | <span>CONTAS</span></h1>
                </div>
                <div class="conteudo-dashboard-card-dados">
                    <table>
                        <thead>
                            <tr>
                                <th class="titulo" colspan="5">SISTEMA DE GERENCIAMENTO DE CONTAS</th>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Tipo de Conta</th>
                                <th>Saldo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>João Silva</td>
                                <td>joao.silva@email.com</td>
                                <td>Conta Corrente</td>
                                <td>R$ 5,000.00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Maria Oliveira</td>
                                <td>maria.oliveira@email.com</td>
                                <td>Conta Poupança</td>
                                <td>R$ 8,500.00</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Carlos Pereira</td>
                                <td>carlos.pereira@email.com</td>
                                <td>Conta Corrente</td>
                                <td>R$ 12,300.00</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ana Santos</td>
                                <td>ana.santos@email.com</td>
                                <td>Conta Poupança</td>
                                <td>R$ 15,700.00</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Ricardo Lima</td>
                                <td>ricardo.lima@email.com</td>
                                <td>Conta Corrente</td>
                                <td>R$ 9,200.00</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Fernanda Costa</td>
                                <td>fernanda.costa@email.com</td>
                                <td>Conta Poupança</td>
                                <td>R$ 6,800.00</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Pedro Oliveira</td>
                                <td>pedro.oliveira@email.com</td>
                                <td>Conta Corrente</td>
                                <td>R$ 18,500.00</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Juliana Silva</td>
                                <td>juliana.silva@email.com</td>
                                <td>Conta Poupança</td>
                                <td>R$ 7,300.00</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Gustavo Pereira</td>
                                <td>gustavo.pereira@email.com</td>
                                <td>Conta Corrente</td>
                                <td>R$ 14,200.00</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Larissa Lima</td>
                                <td>larissa.lima@email.com</td>
                                <td>Conta Poupança</td>
                                <td>R$ 10,900.00</td>
                            </tr>
                            <tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>