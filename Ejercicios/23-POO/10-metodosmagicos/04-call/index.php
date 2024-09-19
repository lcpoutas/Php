<?php

    /*

    El método __call() se invoca automáticamente cuando se llama a un método inexistente o inaccesible. A continuación se muestra la sintaxis del método __call():

        public __call ( string $name , array $arguments ) : mixed

    El método __call() acepta dos argumentos:

    $name es el nombre del método que está siendo llamado por el objeto.
    $argumentos es una matriz de argumentos pasados ​​a la llamada al método.
    El método __call() es útil cuando desea crear una clase contenedora que envuelva la API existente.

    */

    class Personas{
        private $nombre;
        private $edad;
        private $ciudad;

        public function __construct($nombre, $edad, $ciudad){
            $this->nombre=$nombre;
            $this->edad=$edad;
            $this->ciudad=$ciudad;
        }

        //Sobrecarga

        public function __call($name, $arguments){
            return "No existe el método";
        }

    }

    $persona = new Personas("Manolo Lamas",54,"Madrid");

    echo $persona->getNombre(); //ejecutará el codigo especificado en el método call

    class Alumno{
        private $nombre;
        private $edad;
        private $ciudad;

        public function __construct($nombre, $edad, $ciudad){
            $this->nombre=$nombre;
            $this->edad=$edad;
            $this->ciudad=$ciudad;
        }

        //Sobrecarga - ejemplo de funcion call que actuaria como metodo get

        public function __call($name, $arguments){
            $prefix_metodo = substr($name, 0, 3); //saca las tres primeras letras del metodo al que llamas
          
            if($prefix_metodo=="get"){ //comprueba como inicia el nombre del metodo; si inica por get, entonces ejecuta el codigo
                $nombre_metodo = substr(strtolower($name),3); //saca el nombre de la variable de la cual quieres su valor, apartir del nombre del método
                // coge la cadena desde la posicion 3 en adelante; en este caso el metodo getnombre, coje la cadena "nombre"

                if(!isset($this->$nombre_metodo)){
                    return "La variable no existe";
                }else{
                    return $this->$nombre_metodo; //retornamos el valor de la variable con el nombre que guardamos en la variable $nombre_metodo
                }

            } else{
                return "el método no existe";
            }
        }

    }

    $alumno = new Alumno("Manolo Lamas",54,"Madrid");

    echo $alumno->getNombre()."</br>"; // imprime Manolo Lamas
    echo $alumno->getEdad()."</br>"; // imprime Manolo Lamas
    echo $alumno->getCiudad()."</br>"; // imprime Manolo Lamas

?>