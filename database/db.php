<?php

require_once __DIR__ . '/../models/products.php';
require_once __DIR__ . '/../models/dogProduct.php';
require_once __DIR__ . '/../models/catProduct.php';
require_once __DIR__ . '/../models/food.php';
require_once __DIR__ . '/../models/giochi.php';
require_once __DIR__ . '/../models/cucce.php';


$arrayProducts = [
    new product('Articolo per cane','', [new dogProduct( new food('croccantini','7$'),'','')]),
    new product('Articolo per cane','', [new dogProduct('', new giochi('osso', '15$'),'')]),
    new product('', 'articolo per gatto' [new catProduct(new food('croccantini', '7$'),'','')]),
    new product('', 'articolo per gatto'[new catProduct('',new giochi('gomitolo di gomma', '15$'), '')]),
];

var_dump($arrayProducts)
?>