<?php

class catProduct{

    public $food;
    public $giochi;
    public $cucce;

    function __construct($food, $giochi, $cucce)
    {
        $this->food = $food;
        $this->giochi = $giochi;
        $this->cucce = $cucce;
    }
}
