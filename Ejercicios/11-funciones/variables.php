<?php

/*

    Variables locales - Son las que se definen dentro de una función y no pueden ser usadas fuera de la misma, 
    solo están disponibles dentro de esta; a no ser que hagamos un return de esta variable

    Variables globales - Son las que se declaran fuera de la funcion y están disponibles dentro y fuera de estas

*/

//Variable global

$frase = 'Ni los genios son tan genios, no los mediocres tan mediocres';

echo $frase;

function imprimir(){
    global $frase; // esto hace que la funcion pueda acceder a la variable global frase
    echo "<h1> $frase </h1>";

    $year = 2019;

    echo $year;

    return $year;
}

echo $year;

imprimir()

?>