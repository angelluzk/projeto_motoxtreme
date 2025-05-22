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

    <main class="success-page">
        <?php
        $id = $_POST['id'];
        $nome_produto = $_POST['nome_produto'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $ano_fabricacao = $_POST['ano_fabricacao'];
        $preco = $_POST['preco'];
        $cor = $_POST['cor'];
        $sql = "update produtos set id='$id',nome_produto='$nome_produto',marca='$marca',modelo='$modelo',ano_fabricacao='$ano_fabricacao',preco='$preco',cor='$cor' where id=$id";
        $con = mysqli_connect("127.0.0.1", "root", "", "banco_projetomotoxtreme");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        mysqli_query($con, $sql);
        echo "<div class='success-message'>Produto alterado com sucesso!</div>";
        mysqli_close($con);
        ?>
        <h2><a id="voltar-link" href="listar_produto.php">VOLTAR</a></h2>
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