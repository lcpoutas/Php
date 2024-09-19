<?php

// Programación Orientada a Objetos en PHP (POO)

//Definir una clase (molde para crear objetos de tipo coche con caracteristicas parecidas)

class Coche{

    //Atributos o propiedades (variables)

    public $color;
    public $modelo;
    public $marca;
    public $velocidad;
    public $caballaje;
    public $plazas;

    //Contructor - Metodo que setea información en las propiedades, pero nuca devuelve datos; es lo primero que se ejecuta en una clase

    public function __construct($color, $modelo, $marca, $velocidad, $caballaje, $plazas){
        $this->color=$color;
        $this->modelo=$modelo;
        $this->marca=$marca;
        $this->velocidad=$velocidad;
        $this->caballaje=$caballaje;
        $this->plazas=$plazas;

    }

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

?>