<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMO - Administração de Pedidos</title>

    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- CSS Local -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <?php
    $id = "";
    $nome = "";
    $img = "";
    $desc = "";
    $valor = "";

    if ($_POST != null) {

        include '../condb.php';

        $op = $_POST['op'];
        if ($op == 'C') {
            $id = $_POST['id'];
            $consulta = $con->query('select * from produtos where idProd=' . $id . ' order by IdProd;');

            if ($consulta->num_rows > 0) {
                $linha = $consulta->fetch_assoc();
                $nome = $linha['nomeProd'];
                $img = $linha['imagem'];
                $desc = $linha['descProd'];
                $valor = $linha['precoProd'];
                $id = $linha['IdProd'];
            } else {
                echo "<script>alert('Produto: " . $id . " não cadastrado.')</script>";
            }
        }

        if ($op == 'I') {
            $id = $_POST['id'];
            $nome = $_POST['nomeProd'];
            $img = $_POST['imagem'];
            $desc = $_POST['descProd'];
            $valor = $_POST['precoProd'];

            $isql = "insert into produtos (IdProd,nomeProd, imagem, descProd, precoProd) values('" . $id . "' , '" . $nome . "' ,  '" . $img . "' , '" . $desc . "' , '" . $valor . "');";
            $linha = $con->query($isql);

            if ($linha) {
                echo "<script>alert('Cadastro realizado com sucesso.')</script>";
            } else {
                echo "<script>alert('Cadastro não realizado.')</script>";
            }
        }

        if ($op == 'A') {
            $id = $_POST['id'];
            $nome = $_POST['nomeProd'];
            $img = $_POST['imagem'];
            $desc = $_POST['descProd'];
            $valor = $_POST['precoProd'];

            $isql = "update produtos set nomeProd='" . $nome . "' , imagem= '" . $img . "' , descProd='" . $desc . "' , precoProd='" . $valor . "' where IdProd=" . $id . ";";
            $linha = $con->query($isql);

            if ($linha) {
                echo "<script>alert('Atualização realizada com sucesso.')</script>";
            } else {
                echo "<script>alert('Atualização não realizada.')</script>";
            }
        }

        if ($op == 'E') {
            $id = $_POST['id'];
            $linha = $con->query("delete from produtos where IdProd= " . $id . ";");

            if ($linha) {
                echo "<script>alert('Exclusão realizada com sucesso.')</script>";
            } else {
                echo "<script>alert('Exclusão não realizada.')</script>";
            }
        }
    }
    ?>

    <header>
        <?php

        include '../condb.php';
        include 'navbar.php';

        ?>
    </header>

    <main class="padding-conteudo">
        <div class="container min-vh-100 justify-content-center">

            <div class="col text-center">
                <h5 class="display-4">Gerenciar Pedidos</h5>
                <p class="lead">Consultar e Alterar Status.</p>
            </div>

            <div class="d-flex flex-wrap ">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <form action="pedidos.php" method="post">
                        <input type="text" name="op" id="op" hidden>

                        <div class="card m-2">
                            <div class="card-header">
                                <h5 class="card-title">Administração de Pedidos</h5>
                            </div>
                            <div class="card-body">
                                <label class="form-label" for="id">Cod do Pedido:</label>
                                <input class="form-control" type="text" name="id" id="id" value="">
                                <br>
                                <label class="form-label" for="imagem">Nome do Cliente:</label>
                                <input class="form-control" type="text" name="imagem" id="imagem" value="">
                                <br>
                                <label class="form-label" for="imagem">Produtos do Pedido:</label>
                                <input class="form-control" type="text" name="imagem" id="imagem" value="">
                                <br>
                                <label class="form-label" for="descProd">Endereço do Pedido:</label>
                                <input class="form-control" type="text" name="descProd" id="descProd" value="">
                                <br>
                                <label class="form-label" for="precoProd">Valor do Pedido:</label>
                                <input class="form-control" type="text" name="precoProd" id="precoProd" value="">
                                <br>
                                <label class="form-label" for="precoProd">Status do Pedido:</label>
                                <input class="form-control" type="text" name="precoProd" id="precoProd" value="">
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 my-2">
                                        <button class="btn btn-block btn-primary" type="submit" onclick="$('#op').prop('value' , 'I');">Cadastrar</button>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 my-2">
                                        <button class="btn btn-block btn-secondary" type="submit" onclick="$('#op').prop('value' , 'C');">Consultar</button>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 my-2">
                                        <button class="btn btn-block btn-success" type="submit" onclick="$('#op').prop('value' , 'A');">Atualizar</button>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 my-2">
                                        <button class="btn btn-block btn-danger" type="submit" onclick="$('#op').prop('value' , 'E');">Excluir</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col my-2">
                                        <button class="btn btn-block btn-primary" type="clear">Limpar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-4">
                    <div class="card m-2">
                        <div class="card-header">
                            <h5 class="card-title">Instruções:</h5>
                        </div>
                        <div class="card-body">

                            <p class="card-text"> Para realizar um Cadastro, digite todas as informações em seus campos correspondente, em seguida clique no botão "Cadastrar".</p>
                            <p class="card-text"> Para realizar uma Consulta, digite primeiro o numero correspondente ao pedido no campo "Cod do Pedido", em seguida clique no botão "Consulta".</p>
                            <p class="card-text"> Para realizar uma Atualização, digite primeiro o numero correspondente ao pedido no campo "Cod do Pedido", em seguida realize as alterações desejadas e clique no botão "Atualizar".</p>
                            <p class="card-text"> Para realizar uma Exclusão, digite primeiro o numero correspondente ao pedido no campo "Cod do Pedido", em seguida clique no botão "Excluir".</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="my-5">
                <div class="col text-center">
                    <h5 class="display-4">Tabela de Pedidos</h5>
                    <p class="lead">Lista de Codigos, Clientes, Pedido e Precos.</p>
                </div>
                <?php
                include '../condb.php';
                $consulta = $con->query('select * from produtos order by IdProd;');

                ?>
                <table class="table table-dark table-bordered table-striped table-responsive-sm">
                    <thead>
                        <th class="text-center">Código</th>
                        <th class="text-center">Nome do Cliente</th>
                        <th class="text-center">Pedido</th>
                        <th class="text-center">Preço</th>
                        <!--<th class="text-center">Selecionar</th>-->
                    </thead>
                    <tbody>
                        <?php while ($linha = $consulta->fetch_assoc()) { ?>

                            <tr class="text-center">
                                <td><?php echo $linha['IdProd']; ?></td>
                                <td><?php echo 'Teste'; ?></td>
                                <td><?php echo $linha['nomeProd']; ?></td>
                                <td><?php echo $linha['precoProd']; ?></td>
                                <!--<td><button class="btn btn-primary btn-block">Selecionar</button></td>-->
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- JQuery, JS, Popper -->
    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>