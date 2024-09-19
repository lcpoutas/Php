<?php

    //Imprimir por pantalla en cuadrado de los 30 primeros numeros naturales y decir cuales son pares y cuales impares

    for($i=0; $i<=30;$i++){
        $result = sqrt($i);
        if($result%2!=0){
            echo $result."es impar"."</br>";
        } else{
            echo $result."es par"."</br>";
        }
    }

?>