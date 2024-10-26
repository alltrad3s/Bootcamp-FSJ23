<?php

class Airline{
    // Features
    public $id;
    public $name;
    public $aeroType;
    public $service;
    public $planes;

    function __construct($code,$nameParam,$aeroTypeParam,$planesParam)
    {
        $this->id = $code;
        $this->name = $nameParam;
        $this->aeroType = $aeroTypeParam;
        $this->planes = $planesParam;
    }
}

//$air1 = new Airline(1, "Delta","Commercial",80);
//print_r($air1);