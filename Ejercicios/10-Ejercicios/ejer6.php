<?php

    //Ejercicio 6 - mostrar las tablas de multiplicar del 1 al 10 en una tabla html

   echo "<table border=2 sumary='tablas de multiplicar'>";

    echo "<thead>";
        for($i=1; $i<=10; $i++){
            echo "<th style='padding:.5rem' > Tabla del $i </th>";
        }                   
    echo '</thead>';

    echo "<tr>";

    for($i=1; $i<=10; $i++){
        echo "<td style='text-align:center; padding:.5rem; line-height:1.5'>";
            for($j=1; $j<=10; $j++){
                echo "$i x $j = ".$i*$j.'</br>';
            }
        echo '</td>';
    } 

    echo "<tr>";

    echo '</table>';

    echo '</br>';

    echo "<table border=2 sumary='tablas de multiplicar'>";

    for($i=1; $i<=10; $i++){
        echo '<tr>';

        for($j=1; $j<=10; $j++){
               echo "<td style='text-align:center; padding:.5rem'>".$i*$j.'</td>';
        }

        echo '</tr>';
    } 

    echo '</table>'


?>