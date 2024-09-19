<?php

    $peliculas = array('Batman', 'El señor de los anillos', 'Harry Potter', 'La jungla de cristal');
    $cantantes = array('The Boss', 'El canto del loco', 'Rolling Stones', 'Nino Bravo');

    // Recorer el array con for

    echo '<h2> Listado de Peliculas </h2>';

    echo '<ul>';

    for ($i=0; $i< count($peliculas); $i++){
        echo '<li>'.$peliculas[$i].'</li>';
    }

    echo '</ul>';

    //Recorrer con ForEach

    echo '<h2> Listado de Peliculas </h2>';

    echo '<ul>';

    foreach ($cantantes as $cantante){
        echo '<li>'.$cantante.'</li>';
    }

    echo '</ul>';


    //Arrays Asociativos

    $personas = array( 'nombre' => 'Carlos', 'apellidos'=> ' De vicente Poutas', 'edad'=> 25);

    echo $personas['nombre']; //Carlos
    echo $personas['apellidos']; //De vicente poutas
    echo $personas['edad']; //25

    //$_GET y $_POST son ejemplos de arrays asociativos

    //Arrays Multidimensionales

    $contactos = array(
        array(
            'nombre'=>'Carlos',
            'email'=>'carlos@gmail.com'
        ),
        array(
            'nombre'=>'Luis',
            'email'=>'luis@gmail.com'
        ), array(
            'nombre'=>'Manuel',
            'email'=>'manu@gmail.com'
        )
    );

    var_dump($contactos);

    echo $contactos[0][1]; //carlos@gmail.com
    echo $contactos[2][0]; //Manuel

    /* 
    
    Funciones para arrays

        · Ordenacion

            Nombre de la función	 Ordena por	    Mantiene asociación con las key	            Orden de la clasificación	            Funciones relacionadas
            array_multisort()	     valor	        sí si es asociativa, no si es númerica	    primer array u opciones de clas     	array_walk()
            asort()	                 valor	        sí	                                        menor a mayor	                        arsort()
            arsort()	             valor	        sí	                                        mayor a menor	                        asort()
            krsort()	             key	        sí	                                        mayor a menor	                        ksort()
            ksort()	                 key	        sí	                                        menor a mayor	                        asort()
            natcasesort()	        valores	        sí	                                        natural, insensible a may y min	        natsort()
            natsort()	            valor	        sí	                                        natural	                                natcasesort()
            rsort()	                valor	        no	                                        mayor a menor	                        sort()
            shuffle()	            valor	        no	                                        aleatorio	                            array_rand()
            sort()	                valor	        no	                                        menor a mayor	                        rsort()
            uasort()	            valor	        sí	                                        definido por el usuario	                uksort()
            uksort()	            key	            sí	                                        definido por el usuario	                uasort()
            usort()	                valor	        no	                                        definido por el usuario	                uasort()

        · Añadir elementos al array ->  array_push($array)

        · Eliminar elementos de un array -> unset($array)

        · Sacar un elemento aleatorio -> array_rand($array)

        · Invertir un array -> array_reverse($array)

        · Buscar un elemento en el array -> array_search('elemento', $array)

        · Contar numero de elementos en un array -> count($array) o sizeof($array)

    */

?>