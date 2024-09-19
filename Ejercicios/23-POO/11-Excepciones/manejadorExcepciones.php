<?php
function manejador_error($excepcion){
    echo "Excepcion capturada".$excepcion->getMessage();
}

set_exception_handler("manejador_eeror");

//No hay de usar try catch, porque ejecutamos en su lugar nuestro manejador

//Ejemplo 1

// throw new Exception("Error, ha ocurrido una division por 0");

// Ejemplo 2

function dividir($x, $y){
    if($y == 0){
        throw new Exception ("Error, ha ocurrido una division por 0"); // aqui ejecutamos nuestro manejador de errores personalizado "manejador_error"
    }
    $resultado = $x/$y;

    return $resultado;
}

dividir(12,0);

?>