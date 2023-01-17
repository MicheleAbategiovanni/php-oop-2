<?php

require_once "./classes/Product.php";
require_once "./classes/Dog.php";
require_once "./classes/Cat.php";
include "./db.php";


$productList = array_map(function ($product) {
    $toReturn = null;

    if ($product["category"] === "Cani") {
        $toReturn = new Dog($product["category"], $product["product"], $product["title"], $product["img"], $product["price"], $product["iconCategory"]);
    } else if ($product["category"] === "Gatti") {
        $toReturn = new Cat($product["category"], $product["product"], $product["title"], $product["img"], $product["price"], $product["iconCategory"]);
    }
    return $toReturn;
}, $elencoProdotti);


//  var_dump($productList);


?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geppo E-commerce</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>

    <header>
        <h1>Geppo E-commerce</h1>
    </header>

    <main>
        <section>
            <div class="container py-5">
                <h2>Lista di prodotti:</h2>

                <div class="row row-cols-3 g-5">

                    <?php foreach ($productList as $product) { ?>

                        <div class="col">

                            <div class="card" style="height: 100%">
                                <img src="<?php echo $product->getimg() ?>" class="card-img-top" alt="">
                                <div class="card-body ">
                                    <h5 class="card-title"> <?php echo $product->getTitle() ?> </h5>
                                    <h4> Categoria: <i class="fa-solid fs-4 <?php echo $product->getIconCategory() ?>"></i></h4>
                                    <h6 class=""> Tipo: <?php echo $product->getProduct() ?> </h6>
                                    <p class="card-text"> <?php echo $product->getTitle() ?> </p>
                                    <div class="text-center">
                                        <a href="#" class="btn btn-primary text-center"> <?php echo $product->getPrice() ?> € </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    <?php } ?>

                </div>

            </div>

        </section>

    </main>


</body>

</html>