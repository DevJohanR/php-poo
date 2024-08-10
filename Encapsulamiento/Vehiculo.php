<?php

class Vehiculo{
    public $modelo;
  

    public function informacion_vehiculo (){
        echo "El vehiculo es modelo: $this->modelo, de color: $this->color y con matricula $this->matricula";
    }


}


?>