<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Subir archivos PHP</title>
  </head>

  <body>
    <h1>Subir archivos</h1>

    <form action="subir.php" method="POST" enctype="multipart/form-data">
      <div>
        <label for="archivo">Subir archivo</label>
        <input type="file" id="archivo" name="archivo" />
      </div>

      <br>

      <div>
        <input type="submit" value="Enviar" />
      </div>

    </form>

    <div>
        <h1>Listado de imagenes</h1>

        <?php
        // Leemos las imagenes de nuestra carpeta y las imprimimos en el html
            $gestor = opendir('./images'); //opendir -> 

            if($gestor):
                while(($image = readdir($gestor)) !== false): // readdir -> devuelve el nombre del directorio o archivo en caso de exito, 
                    //o false en caso de error. mientras exista un archivo este while será true
                    if($image !='.' && $image != '..'): //evita los nombres de . y ..
                        echo "<img src='images/$image' width='200px' /> <br/>"; //imprime las imagenes en el html
                    endif;
                endwhile;
            endif;
        ?>
    </div>

  </body>
</html>