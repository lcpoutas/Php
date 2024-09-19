<?php

/*

Para mostrar el valor de las cookies, tengo que usar $_COOKIE, que es una variables superglobal 
accesible en todos los proyectos y es un array de tipo asociativo

*/

if(isset($_COOKIE['micookie'])){
    echo $_COOKIE['micookie'].'</br>';
} else {
    echo 'No existe la cookie'.'</br>';
}

if(isset($_COOKIE['oneYear'])){
    echo $_COOKIE['oneYear'].'</br>';
} else {
    echo 'No existe la cookie'.'</br>';
}

?>

<a href="cookies.php">Crear cookies</a>
<br>
<a href="borrarcookie.php">Borrar cookies</a>