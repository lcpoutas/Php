<?php

//borrar el registro de la cookie

if($_COOKIE['micookie']){
    unset($_COOKIE['micookie']);
    setcookie('micookie','', time()-100); //caducamos la cookie para eliminar el registro
}

//redirección de la cookie

header('Location:verCookies.php');

?>
<a href="cookies.php">Crear cookies</a>
<br>
<a href="verCookie.php">Ver cookies</a>