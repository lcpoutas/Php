<?php

    /*

    Ejercicio 1 - Hacer un programa en PHP que tenga un array con 8 numeros enteros y que haga lo siguiente

    Recorrelo y lostralo
    Ordenarlo y mostrarlo
    Mostrar su longitun
    Buscar algun elemento

    */

    $numeros =array();

    //Generar un array aleatorio

    for ($i=0; $i<=7; $i++){
        $numeros[$i]= rand(0, 30);
    }

    //imprimir el array
    for ($i=0; $i<=7; $i++){
        echo "$numeros[$i], ";
    }

    echo '</br>';


    // ordenar y mostrar el array
    sort($numeros);
    
    for ($i=0; $i<=7; $i++){
        echo "$numeros[$i], ";
    }

    echo '</br>';


    //Mostrar la longitud
    echo count($numeros);

    echo '</br>';


    //Buscar algun elemento

    $search = array_search('15',$numeros);

    if($search){
        echo "El 15 existe en el array y aparace en la posicion = $search";
    } else{
        echo 'el nº 15 no existe en el array';
    }


?>