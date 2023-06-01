<?php

class product{

    public $dogProduct;
    public $catProduct;

    function __construct($dogProduct, $catProduct)
    {
        $this->dogProduct = $dogProduct;
        $this->catProduct = $catProduct;
    }
}
