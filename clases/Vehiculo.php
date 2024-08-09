/* Metodos */

<?php
class Vehiculo{
    /* Atributos */
    public $modelo;
    public $matricula;
    public $color;

    /* Metodos - Comportamientos */
    public function encender(){
        echo "Encendiendo Vehiculo";
    }

    public function apagar(){
        echo "Apagando Vehiculo";
    }

    public function frenar (){
        echo "Frenando";
    }
}

?>