<?php

require_once __DIR__ . "/Product.php";


class Cats extends Product
{

    protected $category = "Gatti";

    public function setCategory($category)
    {
        $this->category;

        return $this;
    }
}
