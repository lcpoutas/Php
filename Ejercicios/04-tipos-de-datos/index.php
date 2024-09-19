<?php

    /*
        Tipos de datos

        · Entero (int) -> 59
        · Coma flotante/decimales (float) -> 3.45
        · Cadenas de caracteres (string) -> 'Soy un texto'
        · Booleano (bool) -> true false (1 0 en binario)
        · null
        · arrays -> colección de datos
        · objetos -> conjunto de datos y funciones independientes
    */

    $numero = 44;
    $decimal = 44.4;
    $string = 'hola mundo';
    $booleano = true;

    echo gettype($numero).'</br>';
    echo gettype($decimal).'</br>';
    echo gettype($string).'</br>';
    echo gettype($booleano).'</br>';

    //Debuguear una variable - ver su contenido

    $miNombre = 'Luis Carlos';
    $array = ['carlos', 'pepe', 'manuel'];

    echo var_dump($miNombre).'</br>';

    var_dump($array).'</br>';


?>

