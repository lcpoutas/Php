<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantallla</title>
</head>

<body>

    <h1>Formulario</h1>

    <form action="recibir_post.php" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id='nombre' name='nombre'>
        </div>

        <br>
        
        <div>
            <label for="apellidos">Apellidos</label>
            <input type="text" id='apellidos' name='apellidos'>
        </div>
        
        <br>

        <div>
            <label for="email">Email</label>
            <input type="email" id='email' name='email'>
        </div>

        <br>

        <div>
            <input type="submit" value="Enviar">
        </div>
        
    </form> 

</body>
</html>