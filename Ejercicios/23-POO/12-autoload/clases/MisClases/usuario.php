<?php

namespace MisClases;

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre="Carlos";
        $this->email="correo@correo.com";
    }
}

?>