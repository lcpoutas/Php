<?php


    //Ejercicio 3 - imprimir por pantalla el cuadrado de los numeros del 1 al 40

    /* 
  
    $num=0;

    for($i=0; $i<=40; $i++){

        if($i===40){
            echo ($num*$i);
            break;
        }
        echo ($num*$i).' , ';
        $num++;
    }

    */

    while($num<=40){
        if($num===40){
            echo ($num*$num);
            break;
        }
        echo ($num*$num).', ';
        $num++;
    }

?>