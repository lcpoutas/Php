<?php

session_start();

//echo $variable_normal -> nos da error porque no está definida en este fichero

echo $_SESSION['variable_persistente']; //hoja de sesion activa

?>