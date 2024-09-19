<?php 

// Con la llegada de PHP 5 se incorporó una nueva forma orientada a objetos de manejar los errores. Las excepciones se utilizan para cambiar el 
// flujo normal de un script si ocurre un error concreto dentro de una condición. Esta condición es lo que se denomina excepción.

//try catch

/*

try{
    //Aquí un error en este bloque
} catch (Exception $e){
    //Salta aquí si en el bloque de arriba hay un error
}

*/

//Ejemplo 1
function dividir($x, $y){
    if($y == 0){
        throw new Exception ("Error, ha ocurrido una division por 0");
    }
    $resultado = $x/$y;

    return $resultado;
}

try {
    echo dividir(10,0);
} catch (Exception $e) {
    echo "captura una excepcion".$e->getMessage(); //get message es un metodo propio de exception para capturar el mensaje de error definido en throw new exception
    echo "</br>";
}

// Ejecutar siempre la funcion o el codigo a evaluar dentro del catch, pues en caso de error, el programa se seguirá ejecutando, si ejecutamos la funcion fuera, se producirá un error fatal 
// que detendrá la ejecucuion del programa

?>
