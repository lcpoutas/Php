<?php

/*

Condicionales

    IF:
        if(condicion){
            instruciones
        } else if(condicion){
            instruciones
        } else{
            otras instrucciones
        }
    
    SWITCH:
        switch($variable){
            case condicion:
                intrucción;
                break;
            case condicion:
                intrucción;
                break;
            case condicion:
                intrucción;
                break;
            default:
                instrucción;
                break;
        }
    
    GOTO:
        goto marca;
            echo 'Foo';
                
        marca:
            echo 'Bar';


Operadores de comparacion

        == igual
        === idéntico
        != diferente
        !== no identico
        <> diferente
        < menor que
        > mayor que
        <= menor o igual que
        >= mayor o igual que

Operadores lógicos

    Ejemplo	      Nombre	            Resultado
    $a and $b	  And (y)	            true si tanto $a como $b son true.
    $a or $b	  Or (o inclusivo)	    true si cualquiera de $a o $b es true.
    $a xor $b	  Xor (o exclusivo)	    true si $a o $b es true, pero no ambos.
    ! $a	      Not (no)	            true si $a no es true.
    $a && $b	  And (y)	            true si tanto $a como $b son true.
    $a || $b	  Or (o inclusivo)	    true si cualquiera de $a o $b es true.


*/

define('color', 'rojo');
$tono='oscuro';
$year=2019;

if(color==='rojo'){
    echo 'el color es rojo';
} else if($tono==='oscuro'){
    echo 'el color es rojo y oscuro';
} else{
    echo 'el color no es rojo';
}

echo '</br>';

if($year < 2019){
    echo 'el año es anterior a 2019';
} else if($year > 2019){
    echo 'el año es posterior 2019';
} else{
    echo 'el año es 2019';
}

echo '</br>';

$edad= 42;
$mayoria_edad=18;
$nombre='David';

if($edad>=$mayoria_edad){
 echo $nombre.' es mayor de edad';
} else{
    echo $nombre.' es menor de edad';    
}

echo '</br>';

$dia=1;

switch($dia){
    case 1:
        echo 'Es lunes';
        break;
    case 2:
        echo 'Es martes';
        break;
    case 3:
        echo 'Es miercoles';
        break;
    case 4:
        echo 'Es jueves';
            break;
    case 5:
        echo 'Es viernes';
        break;
    case 6:
        echo 'Es sabado';
        break;
    default:
        echo 'Es domingo';
        break;
}

echo '</br>';

goto marca;

echo 'instruccion 1'.'</br>';
echo 'instruccion 2'.'</br>';
echo 'instruccion 3'.'</br>';
echo 'instruccion 4'.'</br>';

marca:
echo 'he saltado 4 echo con la instruccion goto'.'</br>';



?>