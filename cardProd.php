<div class="card-deck w-100">

    <?php 	
        require_once "functions/product.php";
        $pdoConnection = require_once "connection.php";
        $products = getProducts($pdoConnection);
    ?>
    
    <?php foreach($products as $product) : ?>

            <div class="col-lg-4 col-md-6 col-sm-3">
                
                    <div class="card m-2">

                        <img src="img/<?php echo $product['imagem']; ?>" class="card-img-top img-prod">

                        <div class="card-body">
                            <h4 class="card-title"><?php echo $product['nome']?></h4>
                            <p class="card-text"><?php echo $product["desc"]; ?></p>
                            <p class="card-text">R$<?php echo number_format($product['preco'], 2, ',', '.')?></p>

                        </div>
                        <div class="card-footer">
                            <a class="btn btn-block btn-primary" href="carrinho.php?acao=add&id=<?php echo $product['id']?>" class="card-link">Comprar</a>
                        </div>
                    </div>
                
            </div>
    <?php endforeach;?>

</div>