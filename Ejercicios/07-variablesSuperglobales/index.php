<?php

//Variables superglobales del servidor

echo $_SERVER['SERVER_ADDR'].'</br>'; //imprime mi dirección ip; ::1 se refiere a la dirección de localhost
echo $_SERVER['SERVER_NAME'].'</br>'; //imprime El nombre del host del servidor bajo el cual se ejecuta el script actual. Si el script se ejecuta en un host virtual, este será el valor definido para ese host virtual.
echo $_SERVER['SERVER_SOFTWARE'].'</br>'; //Cadena de identificación del servidor, proporcionada en los encabezados al responder a las solicitudes.
echo $_SERVER['SERVER_PROTOCOL'].'</br>'; // Nombre y revisión del protocolo de información a través del cual se solicitó la página; p.ej. 'HTTP/1.0';
echo $_SERVER['REQUEST_METHOD'].'</br>'; // Qué método de solicitud se utilizó para acceder a la página; p.ej. 'GET', 'HEAD', 'POST', 'PUT'.
echo $_SERVER['HTTP_USER_AGENT'].'</br>'; // 
echo $_SERVER['REQUEST_TIME'].'</br>'; //La marca de tiempo del inicio de la solicitud.
echo $_SERVER['REQUEST_TIME_FLOAT'].'</br>'; //La marca de tiempo del inicio de la solicitud, con precision de microsegundos
echo $_SERVER['REQUEST_TIME_FLOAT'].'</br>'; //direccion ip de mi cliente o usuario

// Variables GET y POST

?>