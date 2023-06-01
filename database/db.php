<?php

require_once __DIR__ . '/../models/products.php';
require_once __DIR__ . '/../models/productType.php';
require_once __DIR__ . '/../models/animale.php';

$cane = new animale('cane');
$gatto = new animale('gatto');
$croccantini = new productType('croccatini','7$');
$osso = new productType('osso', '20$');
$gomitolo = new productType('gomitolo', '10$');
$cuccia = new productType('cuccia', '60$');


$arrayProducts = [
    new product([$croccantini], 'cibo', [$cane]),
    new product([$osso], 'gioco',[$cane]),
    new product([$croccantini], 'cibo',[$gatto]),
    new product([$gomitolo], 'gioco',[$gatto]),
    new product([$cuccia], 'gioco', [$gatto]),
    new product([$cuccia], 'gioco', [$cane]),
];

var_dump($arrayProducts)
?>