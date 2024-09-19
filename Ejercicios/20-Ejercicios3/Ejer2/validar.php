<?php

/* Ejercicio 2 - tener una funcion que:

    1-valide un email con filter_var
    2-recoger una variable por get y validarla
    3-mostrar el resultado
    
*/

function validar($email){
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL )){
        $error=true;
    } else{
        $error=false;
    }

    return $error;
}

$validar = validar($_GET['email']);

if($validar){
    $validar=validar($_GET['email']);
    header("Location:index.php?error=$validar");
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

        <?php if(!$validar): ?>
            <h1 style="color:green">Formulario enviado correctamente</h1>
            <p> Email :  <?=$email ?></p>
        <?php endif; ?>

    </body>
</html>