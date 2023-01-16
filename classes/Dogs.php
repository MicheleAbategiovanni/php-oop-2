<?php

require_once __DIR__ . "/Product.php";


class Dogs extends Product
{

    protected $category = "Cani";

    public function setCategory($category)
    {
        $this->category;

        return $this;
    }
}
