<?php

class Perro extends Animal{
    public $raza;

    function __construct($tipo,$nombre,$edad, $raza)
    {
        parent::__construct($tipo,$nombre,$edad);
        $this->raza = $raza;
    }

}

?>