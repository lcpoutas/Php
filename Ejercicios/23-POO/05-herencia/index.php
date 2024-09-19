<?php

    require_once "clases.php";

    $persona = new Persona();

    $persona->setNombre("victor");

    var_dump($persona); 

    echo "</br>";

    $informatico = new Informatico();

    $informatico->setNombre("Pedro");
    $informatico->setAltura(number_format(1.90, 2));
    // echo $informatico->sabeLenguajes("HTML, CSS, JavaScript, PHP, RUST");

    var_dump(value: $informatico);


?>