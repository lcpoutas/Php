<?php

class Usuario{
    const URL_COMPLETA ="http://localhost"; //Las constantes siempre son propiedades estaticas

    public $email;
    public $password;

    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setPassword($password){
        return $this->password=$password;
    }

}

$usuario = new Usuario();

// acceder a la constante

echo $usuario::URL_COMPLETA;

?>