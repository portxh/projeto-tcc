<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMO - Doces e Bolos</title>

    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- CSS Local -->
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <!-- Menu de Navegacao -->
    <header>
        <nav class="navbar fixed-top  navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav container">
                    <li class="nav-item active">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ofertas">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#loja">Bolos e Doces</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Cliente</a>
                        <div class="dropdown-menu bg-dark">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#signinModal">Entrar</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#signupModal">Cadastrar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Conteudos -->
    <main>

        <?php

        include 'signup-modal.php';
        include 'signin-modal.php';
        
        ?>

        <!-- Seção Inicial -->
        <div id="inicio" class="vh-100">

            <!-- Galeria de Banners -->
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item vh-100 active">
                        <div class="img-slide1"></div>

                    </div>
                    <div class="carousel-item vh-100">
                        <div class="img-slide2"></div>

                    </div>
                    <div class="carousel-item vh-100">
                        <div class="img-slide3"></div>

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>

            <!-- Texto de Chamada -->
            <div class="chamada">
                <h1 class="text-center">S.M.O. Confeitaria</h1>
                <p class="text-center">Proporcionando à você, o lado doce da vida.</p>
            </div>
        </div>

        <!-- Seção de Promoções -->
        <div id="ofertas" class="ofertas min-vh-100">
            <div class="container justify-content-around">

                <!-- Titulo da Seção -->
                <h1>Ofertas da Semana</h1>

                <!-- Conteudo da Secao -->
                <div class="d-flex flex-wrap">

                    <?php

                    //include 'cardOfertas.php';

                    ?>

                </div>
            </div>
        </div>

        <!-- Secao de Produtos -->
        <div id="loja" class="loja min-vh-100">
            <div class="container justify-content-around">

                <!-- Titulo da Seção -->
                <h1>Catalogo</h1>

                <!-- Conteudo da Secao -->
                <div class="d-flex flex-wrap">


                    <!-- Loop de Produtos no BD -->
                    <?php

                    include 'cardProd.php';

                    ?>

                </div>

            </div>
        </div>

        <!-- Secao de Sobre -->
        <div id="sobre" class="sobre min-vh-100">
            <div class="container justify-content-around">

                <!-- Titulo da Seção -->
                <h1>Sobre</h1>

                <!-- Conteudo da Secao -->
                <div class="d-flex flex-wrap align-items-center">

                    <!-- Imagem em destaque a Esquerda -->
                    <div class="col-5">
                        <img src="img/confeiteiro.jpg" alt="" class="w-100">
                    </div>

                    <!-- Textos a direita -->
                    <div class="col-5">
                        <h4 class="text-white">Nossa historia</h4>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium corrupti quia est tenetur voluptates distinctio quis necessitatibus, quisquam laboriosam, debitis at ullam recusandae reprehenderit natus? Minima praesentium magnam consectetur obcaecati?</p>
                    </div>

                </div>

            </div>
        </div>

        <!-- Secao de Contato -->
        <div id="contato" class="contato min-vh-100">
            <div class="container justify-content-around">

                <!-- Titulo da Seção -->
                <h1>Contato</h1>

                <!-- Conteudo da Secao -->
                <div class="d-flex flex-wrap">

                    <div class="col-4 mt-5">
                        <div class="row">
                            <a href="#"> Instagram </a>
                        </div>
                        <div class="row">
                            <a href="#"> WhatsApp </a>
                        </div>
                        <div class="row">
                            <a href="#"> Telefone </a>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 bg- mt-5">
                        <form class="border border-light rounded p-5">
                            <h2 class="text-white text-center lead">Formulario para Contato</h2>
                            <div class="form-group">
                                <label for="nome">Nome Completo:</label>
                                <input type="text" class="form-control" id="nome" placeholder="Seu Nome">
                            </div>
                            <div class="form-group">
                                <label for="email">Email para Contato:</label>
                                <input type="email" class="form-control" id="email" placeholder="email@dominio.com">
                            </div>
                            <div class="form-group">
                                <label for="assunto">Assunto do seu Contato:</label>
                                <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Escreva brevemente o motivo do seu contato">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Mensagem</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escreva sua mensagem"></textarea>
                            </div>
                            <button type="submit" class="btn btn-block btn-outline-success">Enviar</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </main>

    <!-- JQuery, JS, Popper -->
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>