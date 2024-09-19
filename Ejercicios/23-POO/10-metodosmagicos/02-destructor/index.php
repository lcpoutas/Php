<?php

    class User{
        public $nombre;
        public $email;

        public function __construct(){
            echo "Creando el objeto </br>"; //esto no se debe hacer, no se imprimen cosas en el constructor
        }

        // Los destructores son funciones que se encargan de realizar las tareas que se necesita ejecutar cuando un objeto deja de existir. 
        // Cuando un objeto ya no está referenciado por ninguna variable, deja de tener sentido que esté almacenado en la memoria, por tanto, 
        // el objeto se debe destruir para liberar su espacio.

        public function __destruct(){
            echo "destruyendo el objeto";
        }
    }

    $usuario = new User();

    for($i=0;$i<=10; $i++){
        echo $i."</br>";
    }

    /* 
        Este codigo mostrará por pantalla lo siguiente:

        Creando el objeto
        1
        2
        3
        4
        5
        6
        7
        8
        9
        10
        Destruyendo el objeto

        El destructor solamente se ejecutará cuendo el objeto no pueda volver a ser referenciado
    */
        

?>