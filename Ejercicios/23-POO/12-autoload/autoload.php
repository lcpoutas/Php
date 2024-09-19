<?php

function app_autoloader($class){
    $class=str_replace('\\',DIRECTORY_SEPARATOR,$class);
    require_once 'clases/'.strtolower($class).'.php'; //carga todos los archivos contenidos en la carpeta clases
}

spl_autoload_register('app_autoloader');

?>