<?php

interface IAuto{
    function aumentarVelocidad();
}

class PilotoRally{
    function acelerarAuto(IAuto $auto){
        $auto->aumentarVelocidad();
    }
}

class Citroen implements IAuto{
    protected $vel = 0;

    function aumentarVelocidad()
    {
        $this->vel += 10;
    }
}

class Ford implements IAuto{
    protected $vel = 0;

    function aumentarVelocidad()
    {
        $this->vel += 15;
    }
}
