<?php
//Herencia - posibilidad de compartir atributos y metodos entre clases diferentes

class Persona{

    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    //Metodos

    //Getters

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getEdad(){
        return $this->edad;
    }

    //Setters

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellidos($apellidos){
        $this->apellidos=$apellidos;
    }
    public function setAltura($altura){
        $this->altura=$altura;
    }
    public function setEdad($edad){
        $this->edad=$edad;
    }

    // Metodos especifica

    public function hablar(){
        return "estoy hablando";
    }

    public function caminar(){
        return "estoy caminando";
    }
};

class Informatico extends Persona{

    public $lenguajes;
    public $experiencia;

    public function __construct(){
        $this->lenguajes="HTML, CSS, JS, PHP";
        $this->experiencia=10;
    }

    public function sabeLenguajes($lenguajes){
        $this->lenguajes=$lenguajes;

        return "</br>"."Sabe los lenguajes: ".$this->lenguajes."</br>";
    }
    public function programar(){
        return "soy programador";
    }

    public function reparar(){
        return "reparar Ordenadores";
    }

    public function ofimatica(){
        return "estoy trabajando en word";
    }
}

class TecnicoRedes extends Informatico{

    public $auditarRedes;
    public $experienciaRedes;

    public function __construct(){
        parent::__construct(); //heredo las propiedades del constructor de la clase padre, en este caso de la clase informatico

        $this->auditarRedes="experto";
        $this->experienciaRedes = 5;
    }

}

?>

