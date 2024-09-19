<?php

function factorial($numero){
    $resultado=1;

    for($i=$numero; $i>0; $i--){
        $resultado *=$i;
    }

    return $resultado;
}

echo factorial(5);