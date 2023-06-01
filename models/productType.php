<?php

class ProductType{

    public $prodottoAlimentare;
    public $prodottoNonAlimentare;

    function __construct($prodottoAlimentare, $prodottoNonAlimentare)
    {
        $this->prodottoAlimentare = $prodottoAlimentare;
        $this->prodottoNonAlimentare = $prodottoNonAlimentare;
    }
}
