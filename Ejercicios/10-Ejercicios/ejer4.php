<?php

// Ejercicio 4 - Recoger 2 numeros por la url(GET) y realizar las 5 operaciones básicas

$num1=$_GET['numero1'];
$num2=$_GET['numero2'];
$operacion=$_GET['operacion'];

echo 'Operaciones básicas </br>';

switch($operacion){
    case 1:
        echo 'Suma de '.$num1.' + '.$num2.' = '.($num1+$num2).'</br>';
        break;
    case 2:
        echo 'Resta de '.$num1.' - '.$num2.' = '.($num1-$num2).'</br>';
        break;
    case 3:
        echo 'Multiplicacion de '.$num1.' * '.$num2.' = '.($num1*$num2).'</br>';
        break;
    case 4:
        echo 'Division de '.$num1.' / '.$num2.' = '.($num1/$num2).'</br>';
        break;
    case 5:
        echo 'Resto de '.$num1.' / '.$num2.' = '.($num1%$num2).'</br>';
        break;
    default:
        echo 'Suma de '.$num1.' + '.$num2.' = '.($num1+$num2).'</br>';
        echo 'Resta de '.$num1.' - '.$num2.' = '.($num1-$num2).'</br>';
        echo 'Multiplicacion de '.$num1.' * '.$num2.' = '.($num1*$num2).'</br>';
        echo 'Division de '.$num1.' / '.$num2.' = '.($num1/$num2).'</br>';
        echo 'Resto de '.$num1.' / '.$num2.' = '.($num1%$num2).'</br>';
        break;    

}  


?>