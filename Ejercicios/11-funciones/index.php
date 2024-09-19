<?php

/*
    FUNCIONES:
    
    Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto y que 
    pueden reutilizarse solamente invocando a la función tantas veces como quieras

    funcion nombreDeMiFuncion($parametros){
        conjunto de instrucciones
    }

    nombreDeMiFuncion($miParametro) -> llamada de mi funcion

    Las buenas practicas nos dicen que las funciones no deben imprimir directamente valores en pantalla, sino que solo deven devolver la información
    la información obtenida para la cual fueron definidas; por lo tanto las intrucciones del estilo echo no deben ser definidas en las funciones;
    en su lugar se establecerará la instrucción return que devuelve el valor obtenido y posteriomente está función sera llamada en un echo

    */

    $nombres = ['Luis Carlos', 'Pepe', 'Maria José', 'Antonio'];
    function muestraNombres($nombres){

        for($i=0; $i<=sizeof($nombres); $i++){ //sizeof() 0 count() son funciones que nos devuelven la longiitud de un array
            echo $nombres[$i].'</br>';
        }
    }

    muestraNombres($nombres);

    echo '</br>';

    function tablaMultiplicar($numero){

        echo "Tabla de multiplicar del $numero </br>";

        for($i=1; $i<=10; $i++){
            echo "$numero x $i = ".$numero*$i.'</br>';
        }

    }

    if(isset($_GET['numero'])){ // isset() devuelve true si la variable numero está definida
        tablaMultiplicar(($_GET['numero']));
    } else{
        echo 'no se ha definido ningun numero';
    }


    /*
        function calculadora ($num1, $num2, $negrita=false){

            $suma = $num1 + $num2;
            $resta = $num1 - $num2;
            $mult = $num1 * $num2;
            $div = $num1 / $num2;

            if($negrita){
                echo '<h1>';
            }

            echo "Suma : $suma </br>";
            echo "Resta : $resta </br>";
            echo "Multiplicación : $mult </br>";
            echo "Division : $div </br>";

            if($negrita){
                echo '</h1>';
            }
        }
    */

    // La funcion calculadora con buenas practicas se escribiria de la siguiente manera

    function calculadora ($num1, $num2, $negrita=false){

        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $mult = $num1 * $num2;
        $div = $num1 / $num2;

        $cadena_texto='';

        $cadena_texto .="<hr>";

        if($negrita){
            $cadena_texto .="<h1>";
        }

        $cadena_texto.= "Suma : $suma </br>";
        $cadena_texto.= "Resta : $resta </br>";
        $cadena_texto.= "Multiplicación : $mult </br>";
        $cadena_texto.= "Division : $div </br>";

        if($negrita){
            $cadena_texto .="</h1>";
        }

        $cadena_texto .="</hr>";

        return $cadena_texto;


    }

    echo calculadora(2,3,true); //activamos negrita
    echo calculadora(3, 4); //no activamos negrita

    function saludar($nombre){
        return "Hola, me llamo $nombre";
    }

    echo saludar('carlos');
?>