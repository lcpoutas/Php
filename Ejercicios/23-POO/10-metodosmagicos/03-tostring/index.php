<?php

class User{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre="Victor Robles";
        $this->email="correo@correo.com";

    }

    // El metodo __tostring() -  muestra el texto que queramos cuando alguien quiera convertir nuestra clase en una cadena.
    public function __toString(){
        return "Hola, $this->nombre, estas registrado con $this->email </br>";
    }
    public function __destruct(){
        echo "destruyendo el objeto";
    }
}

$usuario = new User();

echo $usuario; //imprime lo especificado en el método tostring
echo $usuario->email;

?>