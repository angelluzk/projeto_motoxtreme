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

    <main>
        <div class="form-container">
            <?php
            $id = $_POST['id'];
            $con = mysqli_connect("127.0.0.1", "root", "", "banco_projetomotoxtreme");
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            $result = mysqli_query($con, "SELECT * FROM funcionarios WHERE id='$id'");
            ?>
            <h1><i class="fas fa-user-edit"></i> Alterar Funcionários</h1>
            <form action="realizaaltfunc.php" method="POST">
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                    <div class="form-row">
                        <label for="nome"><i class="fas fa-user"></i> Nome:</label>
                        <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>" required>
                    </div>
                    <div class="form-row">
                        <label for="end"><i class="fas fa-map-marker-alt"></i> Endereço:</label>
                        <input type="text" id="end" name="end" value="<?php echo $row['end']; ?>" required>
                    </div>
                    <div class="form-row">
                        <label for="fone"><i class="fas fa-phone"></i> Telefone:</label>
                        <input type="tel" id="fone" name="fone" value="<?php echo $row['fone']; ?>" required>
                    </div>
                    <div class="form-row">
                        <label for="cpf"><i class="fas fa-id-card"></i> CPF:</label>
                        <input type="text" id="cpf" name="cpf" value="<?php echo $row['cpf']; ?>" required>
                    </div>
                    <div class="form-row">
                        <label for="email"><i class="fas fa-envelope"></i> E-mail:</label>
                        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                    </div>
                    <div class="form-row">
                        <label for="dn"><i class="fas fa-calendar-alt"></i> Data de Nascimento:</label>
                        <input type="date" id="dn" name="dn" value="<?php echo $row['dn']; ?>" required>
                    </div>
                    <div class="form-row">
                        <label for="escolaridade"><i class="fas fa-graduation-cap"></i> Grau de Escolaridade:</label>
                        <select id="escolaridade" name="escolaridade" required>
                            <option value="fundamental" <?php if ($row['escolaridade'] == 'fundamental')
                                echo 'selected'; ?>>
                                Ensino Fundamental</option>
                            <option value="medio" <?php if ($row['escolaridade'] == 'medio')
                                echo 'selected'; ?>>Ensino Médio
                            </option>
                            <option value="tecnico" <?php if ($row['escolaridade'] == 'tecnico')
                                echo 'selected'; ?>>Ensino
                                Técnico</option>
                            <option value="superior" <?php if ($row['escolaridade'] == 'superior')
                                echo 'selected'; ?>>Ensino
                                Superior</option>
                            <option value="pos-graduacao" <?php if ($row['escolaridade'] == 'pos-graduacao')
                                echo 'selected'; ?>>Pós-Graduação</option>
                            <option value="mestrado" <?php if ($row['escolaridade'] == 'mestrado')
                                echo 'selected'; ?>>
                                Mestrado</option>
                            <option value="doutorado" <?php if ($row['escolaridade'] == 'doutorado')
                                echo 'selected'; ?>>
                                Doutorado</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <label for="cargo"><i class="fas fa-user-tie"></i> Cargo de Atuação:</label>
                        <select id="cargo" name="cargo" required>
                            <option value="gerente" <?php if ($row['cargo'] == 'gerente')
                                echo 'selected'; ?>>Gerente</option>
                            <option value="supervisor" <?php if ($row['cargo'] == 'supervisor')
                                echo 'selected'; ?>>Supervisor
                            </option>
                            <option value="vendedor" <?php if ($row['cargo'] == 'vendedor')
                                echo 'selected'; ?>>Vendedor
                            </option>
                            <option value="mecanico" <?php if ($row['cargo'] == 'mecanico')
                                echo 'selected'; ?>>Mecânico
                            </option>
                            <option value="recepcionista" <?php if ($row['cargo'] == 'recepcionista')
                                echo 'selected'; ?>>
                                Recepcionista</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <label for="sexo"><i class="fas fa-venus-mars"></i> Sexo:</label>
                        <div class="radio-buttons">
                            <input type="radio" id="f" name="sexo" value="f" <?php if ($row['sexo'] == 'f')
                                echo 'checked'; ?>>
                            <label for="f">Feminino</label>
                            <input type="radio" id="m" name="sexo" value="m" <?php if ($row['sexo'] == 'm')
                                echo 'checked'; ?>>
                            <label for="m">Masculino</label>
                        </div>
                    </div>
                <?php } ?>
                <div class="singUp">
                    <button type="submit" name="enviar" value="ok">Alterar</button>
                </div>
            </form>
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