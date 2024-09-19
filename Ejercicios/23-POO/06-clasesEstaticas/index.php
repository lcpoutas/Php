<?php

require_once "configuracion.php";

Configuracion::setColor("azul");
Configuracion::setEntorno("localhost");
COnfiguracion::setNewsletter(true);

echo Configuracion::$color."</br>";
echo Configuracion::$newsletter."</br>";
echo Configuracion::$entorno."</br>";


?>