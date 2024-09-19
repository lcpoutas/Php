<?php

/*

Cookies - Son ficheros de datos que un sitio web le envía a tu ordenador cuando lo visitas y es almacenado en este con el fin de recordar datos o 
rastrear el comportamiento del mismo en la web. No importa si accedes a la web desde el ordenador o desde el móvil, siempre se solicitará 
el almacenamiento de la cookie. 

Es uno de los puntos mas inseguros e la web, ya que la información es almacenada en el cliente. 

Las cookies permanecerán almacenadas en nuestro cliente salvo que las borremos manualmente.

Son utilies para recordar los inicios de sesion, valores temporales de un usuario, etc. 

Los datos guardados en las cookies son limitados requieren mas consumo de red ya que estas han de ser enviadas desde unestro cliente al servidor

*/

// Crear una cookie -> setcookie('nombre_cookie', 'valor que solo puede ser texto', caducidad, ruta, dominio)

setcookie("micookie", "valor de mi cookie"); //cookie basica

// Cookie con expiración en 1 año

setcookie('oneYear', 'duracion de un año de mi cookie', time()+(60*60*24*365));

?>

<a href="verCookies.php">Ver cookies</a>
<br>
<a href="borrarcookie.php">Borrar cookies</a>