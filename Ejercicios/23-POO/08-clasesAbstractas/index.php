<?php

    // Clases abstractas - Las clases abstractas son clases que no se instancian y sólo pueden ser heredadas, trasladando así un funcionamiento obligatorio a 
    // clases hijas. Mejoran la calidad del código y ayudan a reducir la cantidad de código duplicado.
    abstract class Ordenador{

        public $encendido;

        // Si se define un método abstracto dentro de una clase, ésta ha de ser abstracta también. Un método abstracto define una función pero no su implementación. 
        // Cuando una clase hereda de una abstracta, si ésta tiene un método abstracto, debe ser definido en la clase hija.

        abstract public function encender();

        public function apagar(){
            $this->encendido=false;
        }
    }

    //clase hija que hereda de la clase abstracta, aquí debemos definir la funcionalidad de los metodos abstractos de la funcion padre

    class PcAsus extends Ordenador{
        public $software;

        public function encender(){
            $this->encendido=true;
        }
        public function arrancarSoftware(){
            $this->software=true;
        }
    }

    
?>