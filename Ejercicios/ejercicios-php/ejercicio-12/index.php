<?php 

//Escribe un programa que muestre la direccion ip del usuario que visita nuestra web, y si usa firefox, darle la enhorabuena


//Conseguir la IP del usuario

$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];

echo "Tu ip es = ".$ip."</br>";

if(strstr($browser, "firefox")){
    echo "El navegador que usas es firefox </br>";
} else{
    echo "el navegador que usas es ".$browser."</br>";
}

?>