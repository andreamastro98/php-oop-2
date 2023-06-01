<?php

require_once __DIR__ . '/../models/products.php';
require_once __DIR__ . '/../models/productType.php';
require_once __DIR__ . '/../models/animale.php';


$arrayProducts = [
    new product([new ProductType('croccantini','')], 'cibo',[new animale('cane','')])
];

var_dump($arrayProducts)
?>