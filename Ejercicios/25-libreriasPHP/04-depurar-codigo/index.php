<?php

//libreria firephp -> para que funcione necesitamos intalar el plugin firephp en chrome o firefox

    require_once "../vendor/tecnickcom/autoload.php";

    $frutas = array("manzanas", "naranjas", "limones");

    \FB::log($frutas);

    echo "hola mundo";

    \FB::log("muestrame esto en consola");
?>