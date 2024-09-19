<?php

    // Ejercicio 4 - Crear un programa que tenga 4 variables (array, string, int y booleana) y que imprima un mensaje segun el tipo de variable que sea

    function tipo($variable){
        if(!empty($variable)){
            switch(gettype($variable)){
                case 'string':
                    return 'La variable es un string';
                    break;
                case 'array':
                    return 'La variable es un array';
                    break;
                case 'integer':
                    return 'La variable es un integer';
                    break;
                case 'boolean':
                    return 'La variable es un boolean';
                    break;
            }

        }
    }

    $variable1= 'hola mundo';
    $variable2= ['españa', 'portugal', 'francia'];
    $variable3= 12;
    $variable4= true;


    echo tipo($variable1).'</br>';
    echo tipo($variable2).'</br>';
    echo tipo($variable3).'</br>';
    echo tipo($variable4).'</br>';


?>