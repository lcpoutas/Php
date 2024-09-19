<?php

//creamos una clase con un metodo para conectarnos a la base de datos
class database{
    public static function conectar(){
        $conexion= new mysqli("localhost", "pma", "", "notas_master"); //establecer conexion con mi base de datos
        $conexion->query("SET NAMES 'utf8'");

        return $conexion;
    }
}

?>