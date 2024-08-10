<?php

class Animal{
    private $tipo;
    private $nombre;
    private $edad;


    function __construct($tipo,$nombre,$edad)
    {
        
        $this->tipo = $tipo;
        $this->nombre = $nombre;
        $this->edad =$edad;
    }

    public function set_tipo($tipo) {
        $this->tipo = $tipo;
    }
    
    public function set_nombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function set_edad($edad) {
        $this->edad = $edad;
    }
    
    public function get_tipo() {
        return $this->tipo;
    }
    
    public function get_nombre() {
        return $this->nombre;
    }
    
    public function get_edad() {
        return $this->edad;
    }
    
}
?>