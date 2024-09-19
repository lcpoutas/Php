<?php

    // Ejercicio 5 - mostrar todos los numeros entenros que existen entre 2 numeros recividos por la URL(GET)

    $num1=$_GET['numero1'];
    $num2=$_GET['numero2'];

   if($num1<$num2){
        do{
            if($num1===$num2){
                echo $num1;
            }
            echo $num1.', ';
            $num1++;
        } while($num1<=$num2);
   } else if( $num1>$num2){
        do{
            if($num2===$num1){
                echo $num2;
                exit;
            }
            echo $num2.', ';
            $num2++;
        } while($num2<=$num1);
   } else{
        echo $num1;
   }

    
?>