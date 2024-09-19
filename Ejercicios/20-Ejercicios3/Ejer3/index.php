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

    <form action="calcular.php" method="GET">

      <div>
        <label for="num1">numero 1</label>
        <input type="text" id="num1" name="num1" />
      </div>

      <div>
        <label for="num2">numero 2</label>
        <input type="text" id="num2" name="num2" />
      </div>

      <br />

      <div>
        <input type="submit" value="sumar" name="sumar" />
      </div>

      <div>
        <input type="submit" value="restar" name="restar"/>
      </div>

      <div>
        <input type="submit" value="multiplicar" name="multiplicar"/>
      </div>

      <div>
        <input type="submit" value="dividir" name="dividir"/>
      </div>

      <hr>

      <h2>Resultado</h2>

      <?php

        if(!$_GET['resultado']){
            echo "<h3 style='color:red; fontweight:bold'>ERROR : No has introducio uno de los 2 numeros</h3>";
        } else{
            $resultado = $_GET['resultado'];
            echo $resultado.'<br/>';
        }

      ?>

    </form>
  </body>
</html>