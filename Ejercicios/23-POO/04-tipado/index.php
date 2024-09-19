<?php

require_once 'coche.php';

$coche = new Coche('azul','511', 'Ferrari', 120, 400, 2);
$coche2 = new Coche('rojo','511', 'Ferrari', 120, 400, 2);
$coche3 = new Coche('amarillo','511', 'Ferrari', 120, 400, 2);
$coche4 = new Coche('verde','511', 'Ferrari', 120, 400, 2);
$coche5 = new Coche('marron','511', 'Ferrari', 120, 400, 2);

echo $coche->mostrarInfo($coche);

?>