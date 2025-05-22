<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Venda de Motos</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <header>
        <div class="menu-toggle" id="mobile-menu">
            <i class="fas fa-bars"></i>
            <span>MENU</span>
        </div>
        <div class="logo">
            <i class="fas fa-motorcycle"></i>
            <span>MotoXtreme</span>
        </div>
    </header>

    <nav class="side-nav" id="side-nav">
        <div class="close-btn" id="close-btn">
            <i class="fas fa-times"></i>
        </div>
        <ul class="nav-list">
            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>HOME</a></li>
            <li><a href="cadastra_cliente.html"><i class="fa fa-user-plus"></i> Cadastro de Cliente</a></li>
            <li><a href="cadastra_func.html"><i class="fa fa-user-tie"></i> Cadastro de Funcionário</a></li>
            <li><a href="cadastra_produto.html"><i class="fa fa-motorcycle"></i> Cadastro de Produto</a></li>
            <li><a href="listar_func.php"><i class="fa fa-user-edit"></i> Alterar/Deletar Funcionário</a></li>
            <li><a href="listar_cliente.php"><i class="fa fa-user-times"></i> Alterar/Deletar Cliente</a></li>
            <li><a href="listar_produto.php"><i class="fa fa-edit"></i> Alterar/Deletar Produto</a></li>
        </ul>
    </nav>

    <main class="table-geral">
    <h1>Lista de Funcionários - ALTERAR/DELETAR</h1>
        <div>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Data de Nascimento</th>
                    <th>Escolaridade</th>
                    <th>Cargo</th>
                    <th>Sexo</th>
                    <th>Deleta</th>
                    <th>Altera</th>
                </tr>
                <?php
                $con = mysqli_connect("localhost", "root", "", "banco_projetomotoxtreme");
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $result = mysqli_query($con, "SELECT * FROM funcionarios");
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nome']; ?></td>
                        <td><?php echo $row['end']; ?></td>
                        <td><?php echo $row['fone']; ?></td>
                        <td><?php echo $row['cpf']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['dn']; ?></td>
                        <td><?php echo $row['escolaridade']; ?></td>
                        <td><?php echo $row['cargo']; ?></td>
                        <td><?php echo $row['sexo']; ?></td>
                        <td>
                            <form action="realizadelfunc.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
                                <button class="botao-deletar" type="submit" name="botdelfunc" value="ok">Del</button>
                            </form>
                        </td>
                        <td>
                            <form action="formaltfunc.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
                                <button class="botao-alterar" type="submit" name="botaltfunc" value="ok">Alt</button>
                            </form>
                        </td>
                    </tr>
                <?php }
                mysqli_close($con); ?>
            </table>
        </div>
    </main>

    <footer>
        <div class="footer-top">
            <div class="logo-footer-geral">
                <i class="fas fa-motorcycle"></i>
                <span>MotoXtreme</span>
            </div>
            <div class="social-media">
                <h3>Siga nas redes sociais</h3>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>
                <img class="icon-traffic" src="imagem/logoib.png" alt="Ícone de trânsito">
                Paz no trânsito começa por você. | <a href="#">Política de privacidade</a> | <a href="#">Termos de
                    uso</a> | Copyrigth &copy; MotoXtreme.
            </p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>