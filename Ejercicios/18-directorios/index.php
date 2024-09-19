<?php

// Crear directorio -> mkdir('nombre_directorio', permisos_del_diretorio)
if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta');
} else{
    echo 'Ya existe la carpeta <br/>';
}

// Borrar un directorio -> rmdir('mi_carpeta')

if($gestor = opendir('./mi_carpeta')){
    echo '<h2>Contenido carpeta</h2><br/>';
    while(false != ($archivo = readdir($gestor))){ //comprovamos que exiten ficheros dentro de la carpeta, sino la funcion readdir retorna false
        if($archivo!='.' && $archivo!='..'){ // con esto solo imprimimos los archivos que no sean . o ..
            echo $archivo.'<br/>';
        }
    }
}

?>