<?php

require_once __DIR__ . "/Product.php";


class Dog extends Product
{

    protected $category = "Cani";


    public function __construct($_category, $_product, $_title, $_img, $_price, $_iconCategory)
    {
        parent::__construct($_category, $_product, $_title, $_img, $_price, $_iconCategory);

    }
}
