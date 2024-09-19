<h1>Ejemplo Modelo Vista Controlador (MVC)</h1>

<?php

    require_once "autoload.php";

    if(isset($_GET['controller'])){
        $nombreControlador= $_GET['controller'].'Controller';
    } else{
        echo "la pagina que buscas no existe 1";
        exit();
    }

    if(class_exists($_GET['controller'])){
        $controlador = new $nombreControlador();

        //Recoger datos y cargar vistas de manera dinamica

        //comprobamos que se reciba el metodo por get y que este mentodo exista

        if(isset($_GET['action']) && method_exists($controlador, $method_name) ){
            $action=$_GET['action'];
            $controlador->$action();
        } else {
            echo "la pagina que buscas no existe 2";
        }
    } else {
        echo "la pagina que buscas no existe 3";
    }

    //cargar vistas de manera estatica

    // $controlador->mostrar();
    // $controlador->crear();

?>