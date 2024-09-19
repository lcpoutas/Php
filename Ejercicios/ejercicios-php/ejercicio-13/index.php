<?php

    //Escribe un programa que añada valores a un array mientras que su longitud sea menor que 100 y despues imprime ese array por pantallla

    $vector = array();

    for($i=0; $i<100; $i++){
        $elemento = rand(0,100);
        array_push($vector,$elemento);
    }

    foreach($vector as $numero){
        echo $numero." ";
    }
?>