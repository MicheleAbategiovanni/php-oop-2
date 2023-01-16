<?php

require_once "./classes/Product.php";
require_once "./classes/Dogs.php";
require_once "./classes/Cats.php";
include "./db.php";


$productList = array_map(function ($product) {
    $toReturn = null;

    if ($product["category"] === "Cani") {
        $toReturn = new Dogs($product["category"], $product["product"], $product["title"], $product["img"], $product["price"], $product["iconCategory"]);
    } else if ($product["category"] === "Gatti") {
        $toReturn = new Cats($product["category"], $product["product"], $product["title"], $product["img"], $product["price"], $product["iconCategory"]);
    }
    return $toReturn;
}, $elencoProdotti);


var_dump($productList);


?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geppo E-commerce</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>

    <header>
        <h1>Geppo E-commerce</h1>
    </header>

    <main>

    </main>

    
</body>

</html>