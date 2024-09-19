<?php

    function multiplicar($num){


        if( !isset($num) || !is_numeric($num)){
            echo "introduce un parametro correcto";
        } else{
            for($i=0; $i<=10; $i++){
                $result = $i*$num;
                echo $num." x ".$i." = ".$result."</br>";
            }
        }

    }

?>

<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
    <label for="numero">introduce un numero</label>
    <input type="text" name="numero">

    <input type="submit" value="enviar">
</form>

<?php

    $numero = $_GET['numero'];

    multiplicar($numero);

?>

