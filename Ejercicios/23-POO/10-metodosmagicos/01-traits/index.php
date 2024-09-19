<?php

    // Los traits son un mecanismo de reutilización de código en leguajes que tienen herencia simple, como PHP. El objetivo de los traits es reducir las 
    // limitaciones de la herencia simple permitiendo reutilizar métodos en varias clases independientes y de distintas jerarquías. Un trait es similar a 
    // una clase, pero su objetivo es agrupar funcionalidades específicas. Un trait, al igual que las clases abstractas, no se puede instanciar, simplemente 
    // facilita comportamientos a las clases sin necesidad de usar la herencia.

    trait Utilidades{
        public function mostrarNombre(){
            echo "<h1>El nombre es: ".$this->nombre."</h1>";
        }
    }

    class Auto{
        public $nombre;
        public $modelo;

        // Para utilizar un trait se usa la palabra reservada use seguida del nombre del trait en cuestion

        use Utilidades;
    }

    class Person{
        public $nombre;
        public $apellido;

        use Utilidades;

    }

    class Videojuego{
        public $nombre;
        public $year;

        use Utilidades;

    }



    $coche = new Auto();
    $persona = new Person();
    $videojuego = new Videojuego();

    $coche->nombre = "Ferrari";
    $coche->mostrarNombre();

    $persona->nombre = "Manuel";
    $persona->mostrarNombre();

    $videojuego->nombre = "Smash Brosh";
    $videojuego->mostrarNombre();

?>