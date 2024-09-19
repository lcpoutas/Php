<?php

    //Es recomendable es crear una clase con los distintos metodos que queremos

    class UsuarioController{
        // Definimos las acciones que queremos que haga un controlador de usuarios

        public function mostrar(){
            require_once 'models/usuario.php';

            // instanciamos la clase usauario declarada en el modelo
            $usuario = new Usuario();

            //ejecutamos el metodo que queremos
           $todos_los_usuarios = $usuario->conseguirTodos('usuarios');

            // llamamos a la vista crear.php para tener en ella disponible toda la logica declarada en este controlador
            require_once "views/usuarios/crear.php";
        }

        public function crear(){
            require_once "views/usuarios/crear.php";
        }
    }

?>