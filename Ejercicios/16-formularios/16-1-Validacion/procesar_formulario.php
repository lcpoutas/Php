<?php



if(isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['edad'])){
   $error=false;

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $apellidos = $_POST['apellidos'];
    $contraseña = $_POST['pass'];
    $edad = $_POST['edad'];
    $errores=[];

} else{
    $error= true;

    //validar el nombre

    if(!is_string($nombre) || !preg_match("/[A-Za-z]+/", $nombre)){
        $error= true;
        array_push($errores,'nombre');
    }

    //Validar apellidos

    if(!is_string($apellidos) || !preg_match("/[A-Za-z]+/", $apellidos)){
        $error= true;
        array_push($errores,'apellidos');

    }

    //validar edad

    if(!is_int($edad) || !filter_var( $apellidos, FILTER_VALIDATE_INT)){
        $error= true;
        array_push($errores,'edad');

    }

    //Validar email

    if(!is_string($email) || !filter_var( $email, FILTER_VALIDATE_EMAIL)){
        $error= true;
        array_push($errores,'email');

    }
}

if($error){
    $errores = serialize($errores);
    header("Location:index.php?error=$error&?errores=$errores");
}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Validacion de formularios</title>
  </head>

    <body>
        <h1>Formulario</h1>

        <?php if(!$error): ?>
            <h1 style="color:green">Formulario enviado correctamente</h1>
            <p> Nombre : <?=$nombre ?></p>
            <p> Apellidos : <?=$apellidos ?></p>
            <p> Email :  <?=$email ?></p>
            <p> Edad :<?=$edad ?></p>
        <?php endif; ?>

    </body>
</html>