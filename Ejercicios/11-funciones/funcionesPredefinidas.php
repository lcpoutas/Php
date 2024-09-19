<?php  
    
    // Funciones predefinidas en PHP

    // 1. Debuggear.

    // var_dump() -> Muestra lo que tiene dentro una variable, un aray, un objeto, …

        $edad=38;

        var_dump($edad); // Mostraría int(38)
    
    //2. Fechas.

        echo date('d-m-Y'); // 17-03-2023

    //3. Funciones Matemáticas.
    
    echo "La raiz cuadrada de 4 es: ".sqrt(4);

    echo "Número aleatorio entre 1 y 10: ".rand(1,10);

    echo "Redondeo: ".round(3.45678); //Mostraría 3

    echo "Redondeo: ".round(3.5678); //Mostraría 4

    echo "Redondeo: ".round(3.5678,2); //Mostraría 3.57

    //4. Funciones para Variables.

    echo gettype($edad); //Mostraría integer

    // is_string(nombre_variable), is_float(nombre_variable), …

    // isset(nombre_variable) -> muestra si existe la variable o no existe

    // trim() -> Elimina espacios por delante y por detrás de una variable. Muy útil para formularios.

    $nombre= 'jesus fernandez toledo';

    trim($nombre);

    // empty() -> Comprueba si una variable está vacía

    if(empty($nombre)) echo 'Variable vacía';

    // 5. Funciones para cadenas de texto.

    // strlen() -> Contar caracteres de una cadena de texto (de un string)

    echo strlen($nombre);

    // strpos() -> busca un carácter o texto dentro de una cadena de caracteres.

    $frase='Pienso luego existo';

    echo strpos($frase, 'existo'); //Muestra 13. Muestra donde comienza palabra. Se cuenta desde el 0

    echo strpos($frase, 'o'); //Muestra 5

    // str_replace() //remplaza palabras de una cadena de caracteres

    $frase=str_replace('existo','desisto',$frase);

    echo $frase;

    strtolower($frase); //convierte a minúsculas

    strtoupper($frase); //coonvierte a mayúsculas

    // 6. Funciones para Array.

    // asort() -> Ordena Alfabéticamente

    $coches=["renault", "volvo", "mercedes"];
    asort($coches);
    var_dump($coches);

    /*
        Resultado
        array(3) { [2]=> string(8) "mercedes" [0]=> string(7) "renault" [1]=> string(5) "volvo" }
    */

    // arsort() -> Ordena Alfabéticamente en orden inverso

    //array_push(array,elemento_a_añadir) -> Añadir elementos a la última posición del array

    $elementos=array();

    for($j=0; $j<20; $j++){
        array_push($elementos,"elemento ".$j);
    }
    
    var_dump($elementos); //Para ver todos los valores insertados al array
    echo $elementos[12]; //Imprime el valor insertado en la posición 12
    
    // array_pop(array) -> Quita el elemento de la última posición del array

    // unset(array[posición]) -> Quita el elemento del array de la posición indicada

    // array_search() -> Busca un elemento dentro de un array

    $coches=["mercedes","volvo","renault"];
    $resultado=array_search("volvo", $coches);
    var_dump($resultado); // int(1)
    
    //count -> Cuenta los elementos de un array

    echo count($coches); //Mostraría 3 

?>