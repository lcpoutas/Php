<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$contraseña = $_POST['pass'];
$intereses = $_POST['intereses'];

if($nombre && $email && $sexo && $contraseña && $intereses){
    echo "Nombre : $nombre <br/>";
    echo "Email : $email <br/>";
    echo "Sexo : $sexo <br/>";
    echo "Contraseña : $contraseña <br/>";
    echo "Intereses : $intereses <br/>";


}


?>