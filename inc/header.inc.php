
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasterStock</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body style="background-color: #cbccce;">

    <header>
        <div class="bg-primary">

            <div>
                <img src="img/bannerMaster.png" class="w-100" height="350" alt="Banner MasterStock">
            </div>

            <nav class="navbar navbar-expand-lg " style="background-color: #4180dd;">
                <div class="container justify-content-center">

                    <ul class="navbar-nav gap-4">

                        <li class="nav-item">
                            <a class="nav-link text-light active" href="index.php">
                                Início
                            </a>
                        </li>

                        <li class="nav-item dropdown">

                            <a class=" nav-link dropdown-toggle text-light " href="#" role="button"
                                data-bs-toggle="dropdown">
                                Produtos
                            </a>

                            <ul class=" dropdown-menu"style="background-color: #4180dd;">

                                <li>
                                    <a class="text-white dropdown-item link-primary" href="adicionarProduto.php">
                                        Adicionar produto
                                    </a>
                                </li>

                                <li>
                                    <a class="text-white dropdown-item link-primary" href="retirarProduto.php">
                                        Retirar produto
                                    </a>
                                </li>

                                <li>
                                    <a class="text-white dropdown-item link-primary" href="cadastrarProduto.php">
                                        Cadastrar produto
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="funcionarios.php">
                                Funcionários
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="cargos.php">
                                Cargos
                            </a>
                        </li>

                    </ul>

                </div>
            </nav>

        </div>
    </header>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
