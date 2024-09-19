<?php

    $num=$_GET['numero'];
    $limite=(int)$_GET['limite']; // con (int) cambiamos el tipo de variable a un integer de manera manual
    $factor=0;

    if(!$num && !$limite){
        echo 'no se ha definido ni el numero ni el factor limite </br>';
    } else if(!$limite){
        echo 'no se ha definido el factor limite </br>';
    } else if(!$num){
        echo 'no se ha definido el numero </br>';
    } else{
        echo 'Tabla del '.$num1.'</br>';

        while($factor<=$limite){
            $resultado=($num1*$factor);
            echo $num1.' * '.$factor.' = '.$resultado.'</br>';
            $factor++;
        }
    }

?>