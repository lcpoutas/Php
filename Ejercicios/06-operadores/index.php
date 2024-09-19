<?php

//operadores aritmeticos

$numero1 = 22;
$numero2= 10;

echo 'Suma de '.$numero1.' y '.$numero2.' = '.($numero1+$numero2).'</br>';
echo 'Resta de '.$numero1.' y '.$numero2.' = '.($numero1-$numero2).'</br>';
echo 'Multiplicación de '.$numero1.' y '.$numero2.' = '.($numero1*$numero2).'</br>';
echo 'División de '.$numero1.' y '.$numero2.' = '.($numero1/$numero2).'</br>';
echo 'Resto de la división de '.$numero1.' entre '.$numero2.' = '.($numero1%$numero2).'</br>';

// operadores de incremento y decremento

echo $numero1++.'</br>'; //incremento -> le sumamos 1

echo $numero1--.'</br>'; //decremento -> le restamos 1

echo ++$numero1.'</br>'; //Pre-incremento

echo --$numero1.'</br>'; //Pre-decremento

//operadores de asignación

echo $numero1+=5; //le sumamos 5 a la variable numero1
echo '</br>'.$numero1-=10; //le restamos 5 a la variable numero1
echo '</br>'.$numero1*=5; //multiplicamos por 5 la variable numero1
echo '</br>'.$numero1*=5 //dividimos por 5 la variable numero1


?>