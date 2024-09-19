<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
    <label for="numero">Escribe el numero del que quieres el factorial</label>
    <input type="text" name="numero" id="numero">

    <input type="submit" value="enviar">
</form>

<?php

    //imprimir pon pantalla la tabla de multiplicar de un numero recibido por GET de la URL

    if(isset($_GET['numero'])==0 ||isset($_GET['numero'])=="" ){
        echo "Introduce un numero valido";
    } else {
        $num=$_GET['numero'];
        $result=1;

        for($cont=1;$cont<=$num;$cont++){
            $result*=$num;
        }

    echo "el factorial de ".$num." = ".$result."</br>";

    
    }




?>