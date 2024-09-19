<?php

    /*
    
    Ejercicio 5 - crear un array que emule la siguiente tabla

    ACCION      AVENTURA             DEPORTES
    GTA         CrassBandicud       PES21
    COD         Prince of persia    FIFA21
    PUGB        AC                  Moto GP 23

    */

    include 'accion.php';
    include 'aventura.php';
    include 'deportes.php';

    $videojuegos = ['accion' => $accion, 'aventura'=> $aventura, 'deportes'=> $deportes];

    echo "<table border='2'>";

    echo '<thead>';

    for($i=1; $i<=count($videojuegos); $i++){
        echo "<th style='text-align:center; padding:.5rem; line-height:1.5'>".key($videojuegos)."</th>";
        next($videojuegos);
    }

    echo '</thead>';

    $claves = array_keys($videojuegos);


   
    foreach ($claves as $clave){
        echo "<td style='text-align:center; padding:.5rem; line-height:1.5'>";
        for($j=0; $j<=count($videojuegos[$clave])-1; $j++){
            echo $videojuegos[$clave][$j].'</br>' ;
        }
        echo '</td>';
    }  

    echo '</table>';

?>

