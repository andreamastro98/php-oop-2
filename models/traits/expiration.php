<?php

trait Expiration{
    public $expiration;

    function __construct($expiration)
    {
        $this->expiration = $expiration;
    }

    public function isNotExpired(){
        if(date('y-m-d') > date('y-m-d', strtotime($this->expiration))){

            return true;

        } else  {
            throw new Exception( "il prodotto é scaduto" );
            return false;
        }            
    }
}



?>

