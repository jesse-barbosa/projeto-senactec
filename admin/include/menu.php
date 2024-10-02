<div class="menu d-flex flex-column h-100">
        <div class="d-flex flex-row text-center">
            <div class="text-center my-0 mb-3 lead text-light">
                <img src="../img/icon.png" class="rounded-3 mb-1 w-50" alt="Icone">
                <p class='fw-normal text-dark fs-5'><?php echo $_SESSION['nome']; ?></p>
            </div>
        </div>
    <ul class="nav flex-column flex-grow-1">
        <a class="menu-link <?php echo ($_GET['tela'] == 'home') ? 'active' : ''; ?>" href="?tela=home"><li class="nav-item"> 
            <i class="bi bi-house"></i> Início
        </li></a>
        <a class="menu-link <?php echo ($_GET['tela'] == 'cadListarProduto') ? 'active' : ''; ?>" href="?tela=cadListarProduto"><li class="nav-item"> 
            <i class="bi bi-cart"></i> Produtos
        </li></a>
        <a class="menu-link <?php echo ($_GET['tela'] == 'cadListarPedido') ? 'active' : ''; ?>" href="?tela=cadListarPedido"><li class="nav-item"> 
            <i class="bi bi-currency-exchange"></i> Pedidos
        </li></a>
        <?php
            if ($_SESSION['access_level'] == 2){
                echo '
                <a class="menu-link ' . (($_GET['tela'] == 'cadListarCategoria') ? 'active' : '') . '" href="?tela=cadListarCategoria">
                    <li class="nav-item"> 
                        <i class="bi bi-bookmark"></i> Categorias
                    </li>
                </a>
                <a class="menu-link ' . (($_GET['tela'] == 'cadListarUsuario') ? 'active' : '') . '" href="?tela=cadListarUsuario">
                    <li class="nav-item"> 
                        <i class="bi bi-people"></i> Usuários
                    </li>
                </a>
            ';
            }
        ?>
    </ul>
    <ul class="nav flex-column">
        <a class="menu-link mt-auto" href="../../admin/funcao/Sair.php"><li class="nav-item"> 
            <i class="bi bi-door-open"></i> Sair
        </li></a>
    </ul>
</div>
