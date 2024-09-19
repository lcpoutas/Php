<?php

$matriz=array('hola', 2);
$verdadero=true;
$texto='hola mundo';

if(is_array($matriz)){
    echo "el array es un array";
}

if(is_bool($matriz)){
    echo "el boleano es un booleano";
}

if(is_string($matriz)){
    echo "el texto es un string";
}

?>