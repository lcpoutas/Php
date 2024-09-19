<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 2</title>
  </head>

  <body>
    <h1>Formulario</h1>

    <?php
    
    if($_GET['error']==true){
        echo "<h3 style='font-weight:bold; color:red'> Error al enviar el formulario</h3>";
    } else {
        echo "<h3 style='font-weight:bold; color:green'> Formulario enviado correctamente</h3>";
    }

    ?>

    <form action="validar.php" method="GET">

      <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" />
      </div>

      <br />

      <div>
        <input type="submit" value="Enviar" />
      </div>

      <br />
    </form>
  </body>
</html>