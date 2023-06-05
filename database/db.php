<?php

require_once __DIR__ . '/../models/products.php';
require_once __DIR__ . '/../models/productType.php';
require_once __DIR__ . '/../models/animale.php';


$cane = new animale('fa-dog');
$gatto = new animale('fa-cat');
$croccantini = new productType('croccatini','7$','21/09/2023' );
$tonno = new productType('tonno in scatola', '10$', '21/10/2023');
$osso = new productType('osso', '20$', NULL);
$gomitolo = new productType('gomitolo', '10$', NULL);
$cuccia = new productType('cuccia', '60$', NULL);


$arrayProducts = [
    new product([$croccantini], 'cibo', [$cane]),
    new product([$osso], 'gioco',[$cane]),
    new product([$croccantini], 'cibo',[$gatto]),
    new product([$tonno], 'cibo', [$gatto]),
    new product([$gomitolo], 'gioco',[$gatto]),
    new product([$cuccia], 'gioco', [$gatto]),
    new product([$cuccia], 'gioco', [$cane]),
];

// var_dump($arrayProducts[0])
?>