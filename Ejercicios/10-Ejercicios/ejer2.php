<?php

    // Ejercicio 2. Escribir todos los numeros pares que hay del 1 al 100

    for($i=0; $i<=100; $i++){
        if($i===100){
            echo $i;
        } else if($i%2===0){
            echo $i.' ,';
        } 
    }

?>