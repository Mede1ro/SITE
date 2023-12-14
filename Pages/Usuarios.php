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
                    <h1>DASHBOARD | <span>USUÁRIOS</span></h1>
                </div>
                <div class="conteudo-dashboard-card-dados">
                    <table>
                        <thead>
                            <tr>
                                <th class="titulo" colspan="5">SISTEMA DE GERENCIAMENTO DE USUÁRIOS</th>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Tipo de Usuário</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $usuarios = [
                                ['id' => 1, 'nome' => 'João Silva', 'email' => 'joao.silva@email.com', 'tipo' => 'Admin'],
                                ['id' => 2, 'nome' => 'Maria Oliveira', 'email' => 'maria.oliveira@email.com', 'tipo' => 'Usuário'],
                                ['id' => 3, 'nome' => 'Carlos Pereira', 'email' => 'carlos.pereira@email.com', 'tipo' => 'Admin'],
                                ['id' => 4, 'nome' => 'Ana Rodrigues', 'email' => 'ana.rodrigues@email.com', 'tipo' => 'Usuário'],
                                ['id' => 5, 'nome' => 'Pedro Oliveira', 'email' => 'pedro.oliveira@email.com', 'tipo' => 'Admin'],
                            ];

                            foreach ($usuarios as $usuario) {
                                echo '<tr>';
                                echo '<td>' . $usuario['id'] . '</td>';
                                echo '<td>' . $usuario['nome'] . '</td>';
                                echo '<td>' . $usuario['email'] . '</td>';
                                echo '<td>' . $usuario['tipo'] . '</td>';
                                echo '<td><a href="#">Editar</a> | <a href="#">Excluir</a></td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


</html>