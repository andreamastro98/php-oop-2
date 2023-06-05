<?php

require_once __DIR__ . '/traits/expiration.php';


class ProductType{
    use Expiration;

    public $nomeProdotto;
    public $prezzo;
    public $expiration;

    function __construct($nomeProdotto, $prezzo, $expiration)
    {
        $this->nomeProdotto = $nomeProdotto;
        $this->prezzo = $prezzo;
        $this->expiration = $expiration;
    }
}
