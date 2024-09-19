<?php
require_once 'ModeloBase.php';

class Nota{
    public $nombre;
    public $contenido;
    public $usuario_id;


    function getNombre() { 
        return $this->nombre; 
    } 

    function getContenido() { 
        return $this->contenido; 
    }
    function getUsuario_id() {
		return $this->usuario_id;
	}
    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setContenido($contenido){
        $this->contenido = $contenido;
    }

    public function conseguirTodos(){
        return "sacando todos los usuarios";
    }
    function setUsuario_id($usuario_id) {
		$this->usuario_id = $usuario_id;
	}
    public function guardar(){
		$sql = "INSERT INTO notas(usuario_id, titulo, descripcion, fecha) VALUES ({$this->usuario_id}, '{$this->titulo}', '{$this->descripcion}', CURDATE());";
	
		$guardado = $this->db->query($sql);
		
		return $guardado;
	}

}

?>