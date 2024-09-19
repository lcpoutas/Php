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

    <?php

    if(isset($_GET['error'])){

        $error=$_GET['error'];

        if($error){

            echo "<p style='color:green'> Formulario campos por completar</p>";

        } elseif(isset($_GET['errores'])){

            $errores=$_GET['errores'];

            $array = explode(',', $errores);

            foreach($array as $error){
                echo "tienes un error en el campo $error <br/>";
            }

        } else{

            echo "<strong style='color:green'> Formulario enviado </strong>";

        }
    }

    ?>

    <form action="procesar_formulario.php" method="POST">
      <div>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required pattern="[A-Za-z]+" />
      </div>

      <br />

      <div>
        <label for="apellidos">Apellidos</label>
        <input type="text" id="apellidos" name="apellidos" required pattern="[A-Za-z]+" />
      </div>

      <br />

      <div>
        <label for="edad">Edad</label>
        <input type="text" id="edad" name="edad" required pattern="[0-9]+" />
      </div>

      <br />

      <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />
      </div>

      <br />

      <div>
        <label for="pass">Contraseña</label>
        <input type="password" id="pass" name="pass" required/>
      </div>

      <br />

      <div>
        <input type="submit" value="Enviar" />
      </div>

      <br />
    </form>
  </body>
</html>