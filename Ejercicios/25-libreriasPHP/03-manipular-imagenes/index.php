<?php

// libreria -> masterexploder phpthumb

    require_once "../vendor/tecnickcom/autoload.php";

    $foto_original = "mifoto.png";
    $guardar = "foto_mod.jpg";

    //accedemos a la clase necesaria para ejecutar los metodos de la libreria
    $thumb = new PHPThumb\GD($foto_original);
    //redimensionar
    $thumb->resize(450,450); 
    // mostrar imagen
    $thumb->show();
    //guardar imagen
    $thumb->save($guardar);
    //recortar imagen
    $thumb->crop(50, 50, 120, 120); //recorta la imaen apartir del pixel 50 en x y 50 en y, hasta los 120px en x y en y
    //recortar imagen desde el centro
    $thumb->cropFromCenter(200,100);
?>