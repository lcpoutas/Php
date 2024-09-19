<?php

/*

Sesión - Almacenar y persistir datos del usuario mientras que navega en un sitio web hasta que cierra sesion o cierra el navegador.
Son capaces de almacenar grandes cantidades de datos, pero no lo hacen de manera local; es decir; en el cliente, 
sino que este información se almacena en un servidor web, lo que hace este proceso mucho más seguro.

*/

//iniciar la sesion

session_start();

//Variable local
$variable_normal='Soy una cadena de texto';

//Variable de sesion - superglobal -> la podre usar en cualquier pagina de mi dominio
$_SESSION['variable_persistente']  = 'Hoja de sesion activa';


echo $variable_normal.'</br>';
echo $_SESSION['variable_persistente'].'</br>';

?>