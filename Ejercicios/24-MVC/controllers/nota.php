<?php

class NotaController{
    public function listar(){

        // Modelo
        require_once 'models/nota.php';

        // Logica accion del controlador
        $nota = new Nota();
        $nota->setNombre('Hola');
        $nota->setContenido('Hola Mundo PHP MVC');

        $notas = $nota->conseguirTodos('notas');
        //Vista

        require_once 'views/nota/listar.php';
    }

    public function crear(){
        // Modelo
		require_once 'models/nota.php';
		
		$nota = new Nota();
		$nota->setUsuario_id(1);
		$nota->setTitulo("Nota desde PHP MVC");
		$nota->setDescripcion("Descricion de mi nota");
		$guardar = $nota->guardar();
		
		header("Location: index.php?controller=Nota&action=listar");
    }

    public function borrar(){}

}

?>