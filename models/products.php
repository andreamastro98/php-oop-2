<?php

class product{

    public $ProductType;
    public $categoria;
    public $animale;

    function __construct($ProductType, $categoria, $animale)
    {
        $this->ProductType = $ProductType;
        $this->categoria = $categoria;
        $this->animale = $animale;
    }
}
