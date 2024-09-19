<?php

    // Hacer un array que contenga 5 numeros enteros y hacer lo siguiente:

    $numeros = [2, 6, 3, 20, 32];

    // Recorrerlo y mostrarlo

    foreach($numeros as $numero){
        echo $numero." ";
    }

    echo "</br>";

    //Ordenarlo y mostrarlo

    echo "<h2> Ordenar y mostrar el array </h2></br>";

    sort($numeros);

    foreach($numeros as $numero){
        echo $numero." ";
    }

    echo "</br>";


    // Mostrar su longitud

    $long = count($numeros);

    echo "la longitud del array es = ".$long;

    echo "</br>";

    //Buscar en el array

    if(!array_search(60, $numeros)){
        echo 'el numero no existe en el array';
    } else {
        echo "el numero si existe en el array";
    }



?>

