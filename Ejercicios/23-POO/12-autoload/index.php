<?php

/* 

require_once "clases/usuario.php";
require_once "clases/categoria.php";
require_once "clases/entrada.php";

*/

// Lo poco optimo aquí es tener que ir cargando todas las clases en los diferentes archivos que se usan utilizando el require, 
// lo cual cuando tengamos muchas clases son una gran cantidad de lineas de codigo

// Para solucionar esto tenemos el autoload

require_once 'autoload.php';


/*

$usuario = new Usuario();

echo $usuario->nombre;
echo "</br>";
echo $usuario->email;

$categoria = new Categoria();

echo $categoria->nombre;
echo "</br>";

$entrada = new Entrada();

echo $entrada->titulo;
echo "</br>";
*/

//Espacios de nombres y paquetes 

// El espacio de nombre suele tener el mismo nombre que la carpeta que contiene los archivos donde se usara

// La palabra reservada "use" me permite cargar un espacio de nombre

use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;

class Principal{
	public $usuario;
	public $categoria;
	public $entrada;
	
	public function __construct() {
		$this->usuario = new Usuario();
		$this->categoria = new Categoria();
		$this->entrada = new Entrada();
	}
	
	function getUsuario() {
		return $this->usuario;
	}

	function getCategoria() {
		return $this->categoria;
	}

	function getEntrada() {
		return $this->entrada;
	}

	function setUsuario($usuario) {
		$this->usuario = $usuario;
	}

	function setCategoria($categoria) {
		$this->categoria = $categoria;
	}

	function setEntrada($entrada) {
		$this->entrada = $entrada;
	}
	
};

// Comprobar si existe una clase

$clase = class_exists('Usuario'); //devuleve true si existe o false si no existe

if($clase){
    echo "<h1>La clase Usuario existe</h1>";
} else {
    echo "<h1>La clase no existe</h1>";
}

// comprobar si existe un método

$metodos = get_class_methods($principal); //obtiene todos los metodos de la clase $principal y los guarda en un array

$busqueda = array_search('setEntrada', $metodos); //comprueba si el nombre del metodo "setEntrada" está en el array $metodos, si existe me da el indice donde se encuentra, si no existe devuelve false

?>