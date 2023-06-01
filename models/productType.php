<?php

class ProductType{

    public $nomeProdotto;
    public $prezzo;

    function __construct($nomeProdotto, $prezzo)
    {
        $this->nomeProdotto = $nomeProdotto;
        $this->prezzo = $prezzo;
    }
}
