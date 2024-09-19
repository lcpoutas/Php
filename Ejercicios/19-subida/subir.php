<?php

// Subir archivos

// Para subir un archivo necesitas primero hacer uso de la variable superglobal $_FILES['valor de la propiedad name en el form']

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
var_dump($archivo);

$tipo = $archivo['type']; //aqui guardamos el tipo de archivo que es el que subimos

// Subida de una imagen

if($tipo='image/jpg' || $tipo='image/jpeg' || $tipo='image/png' || $tipo='image/gift'){
    if(!is_dir('images')){
        mkdir('images', 0777);
    }

    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre); //mueve el archivo de la localizacion actual a la especificada; en este caso la carpeta images

    header("Refresh: 5; URL=index.php"); //espera 5 segundos y me redirige al archivo index.http
    echo"<h1 style='color:green, font-weight:bold' > archivo subido correctamente</h1>";
} else {
    header("Refresh: 5; URL=index.php"); //espera 5 segundos y me redirige al archivo index.http
    echo"<h1 style='color:red, font-weight:bold' > Suba un formato correcto de archivo</h1>";
}

?>