<?php

    // Ejercicio 3 - Programa que compruebe si una variable está vacia, y si está vacio 
    // rellenarla con texto en minusculas y postralo con mayusculas y en negrita

    function comprobar($texto){

        if(empty($texto)){
            $texto='el texto estaba vacio, ahora ya no';
        } else {
            return strtoupper($texto);

        }

        return strtoupper($texto);
    }

    $texto='';

    echo '<strong>'.comprobar($texto).'</strong>'



?>