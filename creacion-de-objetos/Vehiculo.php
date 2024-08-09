<?php
//Crea una clase y declara sus propiedades
class Vehiculo{
    public $modelo;
    public $color;
    public $matricula;

    //Define un metodo utilizando la siguiente estructura
        //Incluye como parametros las propiedades de la clase
    function __construct($modelo, $color, $matricula)
    {
        //Utiliza el acceso a propiedades para asignar el valor de los parametros en cada una de las propiedades de la clase

        //Para manejar  propiedades de la clase debes usar la pseudo variable this, mientras que los parametros del constructor son los valores de un objeto particular

        /*
        // $this->propiedad = $parametro;
        */
       
        $this->modelo = $modelo;
        $this->color = $color;
        $this->matricula =$matricula;

    }

    public function informacion_vehiculo (){
        echo "El vehiculo es modelo: $this->modelo, de color: $this->color y con matricula $this->matricula";
    }


}

//Fuera del bloque de la clase declaramos una variable para el nuevo objeto
$vehiculo_1 = new Vehiculo("Mod-1","Rojo","AE123");


//Para acceder a cualquier metodo de una clase
/*
// Objeto | Operador-Objeto | Metodo
*/
$vehiculo_1   ->     informacion_vehiculo();

?>