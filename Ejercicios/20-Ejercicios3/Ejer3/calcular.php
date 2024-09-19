<?php

    // Hacer una interfaz de usuario (formulario) con 2 inputs y 4 botones (sumar, restar multiplicar u dividir)

    $resultado=false;

    if(($_GET['num1']) && ($_GET['num1'])){

        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        if(isset($_GET['sumar'])){
            $resultado = $num1 + $num2;
        }
        if(isset($_GET['restar'])){
            $resultado = $num1 - $num2;
        }
        if(isset($_GET['multiplicar'])){
            $resultado = $num1 * $num2;
        }
        if(isset($_GET['dividir'])){
            $resultado = $num1 / $num2;
        }
    } else{
        header("Location:index.php?resultado=$resultado");
    }

    header("Location:index.php?resultado=$resultado");

?>