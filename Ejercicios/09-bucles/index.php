<?php

/*

Bucles - son estructuras de control iterativas

    WHILE:
        while(condicion){
            bloque de instrucciones
        }
    
    DO WHILE - las instrucciones se ejecutan al menos una vez:
        do{
            //bloque de instrucciones
        } while(condicion)

    FOR:
        for(expresion inical; condicion; operacion){
            bloque de instrucciones
        }

*/

$num=0;

while($num<=10){
    echo $num.'</br>';
    $num++;
}

$contador=1;
$edad=25;

do{
    echo 'tienes acceso al local privado'.$contador.'</br>';
    $contador++;
} while($edad>=18 && $contador<=10);

$resultado=0; 

for($i=0; $i<10; $i++){
    echo $resultado+=$i;
    echo '</br>';
}

?>