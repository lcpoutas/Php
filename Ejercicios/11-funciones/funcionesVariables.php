<?php

    //Funciones variables

    function buenoDias(){
        return 'Hola, buenos días';
    }

    function buenasTardes(){
        return 'Hola, Que tal a ido la comida?';
    }

    function buenasNoches(){
        return 'Hola, te vas a dormir ya?, buenas noches';
    }

    $horario= "buenasNoches";
    $horario1 = buenoDias();
    $horario2="Tardes";

    echo $horario; //Hola, te vas a dormir ya?, buenas noches
    echo $horario1; //Hola, buenos días
    echo "buenas".$horario2 //Hola, Que tal a ido la comida?



?>