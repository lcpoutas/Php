<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
    <label for="numero">Escribe el numero de la tabla que quieres</label>
    <input type="text" name="numero" id="numero">

    <input type="submit" value="enviar">
</form>

<?php

    //imprimir pon pantalla la tabla de multiplicar de un numero recibido por GET de la URL

    $num=$_GET['numero'];

    if(isset($_GET['numero'])==0 ||isset($_GET['numero'])=="" || is_numeric($_GET['numero']) ){
        echo "Introduce un numero valido";
    } else {
        echo "tabla de multiplicar del ".$num."</br>";

        for($i=1;$i<=10;$i++){
            $result=$num*$i;
            echo $num." x ".$i." = ".$result."</br>";
        }
    }


?>