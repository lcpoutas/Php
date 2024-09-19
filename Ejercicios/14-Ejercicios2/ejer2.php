<?php

    // Ejercico 2 - escribir un programa con php que añada valores a un array mientras que su longitud sea menor de 120 y mostralo por pantalla

    $numeros =array();

    //Generar un array aleatorio

    for ($i=0; $i<=120; $i++){
        array_push($numeros, rand(0,120));
    }

    $limite=count($numeros);

    sort($numeros);
    //imprimir el array
    for ($i=0; $i<=$limite-1; $i++){
        if($i===$limite-1){
            echo "$numeros[$i] ";
        } else{
            echo "$numeros[$i], ";
        }
    }

?>