<?php

if(isset($_POST["submit"])){
    if(isset($_POST["name"]) && strlen($_POST['name'])<=20 && !is_numeric($_POST['name'])  && !preg_match("/[0-9]/",$_POST["name"])){
        echo $_POST["name"]."</br>";
    }

    if(isset($_POST["apellido"]) && strlen($_POST['apellido'])<=20 && !is_numeric($_POST['apellido'])  && !preg_match("/[0-9]/",$_POST["apellido"])){
        echo $_POST["apellido"]."</br>";

    }

    if(isset($_POST["email"]) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        echo $_POST["email"]."</br>";
    }

    if(isset($_POST["pass"]) && strlen($_PASS['pass'])<=20){
        echo sha1($_POST["pass"])."</br>"; //sha1 -> un metodo de cifrado para aplicar a las contraseñas
    }
}

?>