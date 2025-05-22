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
            $result = mysqli_query($con, "SELECT * FROM produtos WHERE id='$id'");
            ?>
            <h1><i class="fas fa-user-edit"></i> Alterar Produto</h1>
            <form action="realizaaltproduto.php" method="POST">
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                    <div class="form-row">
                        <label for="nome_produto"><i class="fas fa-motorcycle"></i> Nome do Produto:</label>
                        <input type="text" id="nome_produto" name="nome_produto" value="<?php echo $row['nome_produto']; ?>" required>
                    </div>
                    <div class="form-row">
                        <label for="marca"><i class="fas fa-industry"></i> Marca:</label>
                        <input type="text" id="marca" name="marca" value="<?php echo $row['marca']; ?>" required>
                    </div>
                    <div class="form-row">
                        <label for="modelo"><i class="fas fa-motorcycle"></i> Modelo:</label>
                        <input type="text" id="modelo" name="modelo" value="<?php echo $row['modelo']; ?>" required>
                    </div>
                    <div class="form-row">
                        <label for="ano_fabricacao"><i class="fas fa-calendar-alt"></i> Ano de Fabricação:</label>
                        <input type="date" id="ano_fabricacao" name="ano_fabricacao" value="<?php echo $row['ano_fabricacao']; ?>" required>
                    </div>
                    <div class="form-row">
                        <label for="preco"><i class="fas fa-dollar-sign"></i> Preço:</label>
                        <input type="text" id="preco" name="preco" value="<?php echo $row['preco']; ?>" required>
                    </div>
                    <div class="form-row">
                        <label for="cor"><i class="fas fa-palette"></i> Cor:</label>
                        <input type="text" id="cor" name="cor" value="<?php echo $row['cor']; ?>" required>
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