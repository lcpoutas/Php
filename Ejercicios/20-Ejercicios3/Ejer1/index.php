<?php

// Ejercicio 1 - Crear una sesión que aumente su valor en 1 o disminuya en 1 en función de si el parametro counter está en 1 o en 0

//iniciamos sesion
session_start();

//comprobamos si mi variable de sesion existe, y si no, la creo e inicio en 0
if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}

//comprobamos si mi variable de contador existe, y comprobamos su valor, si es 1 aumentamos en 1 la variable de sesion
if (isset($_GET['counter']) && $_GET(['counter'])==1){
    $_SESSION['numero']++;
}

//comprobamos si mi variable de contador existe, y comprobamos su valor, si es 0 disminuimos en 1 la variable de sesion
if (isset($_GET['counter']) && $_GET(['counter'])==0){
    $_SESSION['numero']--;
}

?>

<h1>El valor actual de la sesion es : <?= $_SESSION['numero']?></h1>

<!-- aquí enviamos el valor de la variable couter, obtenido por el metodo get, el valor 1 o 0 para así aumentar o disminuir el contador -->
<a href='ejercicio1.php?counter=1'> Aumentar valor</a>
<a href='ejercicio1.php?counter=0'> Disminuir valor</a>