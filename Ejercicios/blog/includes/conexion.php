<?php
// Conexión
$server="localhost";
$username="pma";
$password="";
$database="blog_master";
$db=mysqli_connect($server, $username, $password, $database);


mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesión
if(!isset($_SESSION)){
	session_start();
}