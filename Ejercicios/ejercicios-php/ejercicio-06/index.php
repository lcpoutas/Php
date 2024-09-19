<?php

    //Crea un array llamado meses que almacene los 2 meses del año
    // Recorrelo con for para mostrar los doce mese del año

    $meses=['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
    'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

    $num_meses=count($meses);

    for($i=0;$i<=$num_meses;$i++){
        echo $meses[$i]."</br>";
    }

?>