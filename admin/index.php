<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMO - Administração</title>

    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- CSS Local -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <header>
        <?php

        include '../condb.php';
        include 'navbar.php';

        ?>
    </header>

    <main class="vh-100 padding-conteudo">

        <div class="container">
            <div class="col text-center my-5">
                <h1 class="display-4">Olá</h1>
                <p class="lead">Bem-vindo(a) a area administrativa da Confeitaria SMO.</p>
            </div>
            <div class="d-flex justify-content-center my-5">
                <div class="col-8">
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">Administrar Produtos</h5>
                                <br>
                                <p class="card-text text">Caso deseja administrar assuntos relacionados a produtos em venda e promoções.</p>
                                <p class="card-text">Clique abaixo:</p>
                            </div>
                            <div class="card-footer">
                                <a href="produtos.php" class="btn btn-block btn-primary">Produtos</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">Administrar Pedidos</h5>
                                <br>
                                <p class="card-text">Caso deseja administrar assuntos relacionados a pedidos em andamento ou realizados.</p>
                                <p class="card-text">Clique abaixo:</p>
                            </div>
                            <div class="card-footer">
                                <a href="pedidos.php" class="btn btn-block btn-primary">Pedidos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- JQuery, JS, Popper -->
    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>