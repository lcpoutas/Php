<?php

    $texto="";

    if(empty($texto)){
        $texto="Texto de relleno";
        $texto=strtoupper($texto); //convertimos el texto a mayusculas
        echo "<strong>".$texto."</strong>";

    }

?>