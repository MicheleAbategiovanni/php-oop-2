<?php

require_once __DIR__ . "/Product.php";


class Cat extends Product
{

    protected $category = "Gatti";

    public function __construct($_category, $_product, $_title, $_img, $_price, $_iconCategory)
    {
        parent::__construct($_category, $_product, $_title, $_img, $_price, $_iconCategory);
        // si esegue quando si crea l'oggetto automaticamente

    }
}
