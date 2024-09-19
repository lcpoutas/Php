<?php

// Programación Orientada a Objetos en PHP (POO)

//Definir una clase (molde para crear objetos de tipo coche con caracteristicas parecidas)

class Carro{

    //Atributos o propiedades (variables)

    public $color = "rojo";
    public $modelo = "511";
    public $marca ="Ferrari";
    public $velocidad=300;
    public $caballaje=500;
    public $plazas=2;

    //Metodos o funciones - acciones que puede realizar el objeto

    public function getColor(){

        //This busca en esta clase la propedad especificada con "->"

        return $this->color;
    }

    public function getVelocidad(){

        //This busca en esta clase la propedad especificada con "->"

        return $this->velocidad;
    }

    public function setColor($color){

        //This busca en esta clase la propedad especificada con "->"

        $this->color=$color;
    }

    public function acelerar(){

        //This busca en esta clase la propedad especificada con "->"

        $this->velocidad++;
    }

    public function frenar(){

        //This busca en esta clase la propedad especificada con "->"

        $this->velocidad--;
    }



}

//Crear un objeto o instanciar la clase

$coche = new Carro();

//Usar un método

echo $coche->getVelocidad().'</br>';
$coche->setColor('amarillo');
echo $coche->getColor().'</br>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();

$coche->frenar();

echo 'Lavelocidad del coche es:'.$coche->getVelocidad().'</br>';

//Crear un nuevo objeto independiente del objeto coche

$coche2 = new Carro();

$coche2->setColor('verde');
echo $coche2->getColor().'</br>';


?>