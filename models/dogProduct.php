<?php

class dogProduct{

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
