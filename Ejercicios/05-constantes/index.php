<?php

// Constantes - contenedor de información donde no podemos reasignar su valor
// Para definir  una constante se usa la funcion define()

define('NOMBRE', 'Carlos');

define('NUMERO',value: 2);

echo NOMBRE.'</br>';
echo NUMERO;

//COnstantes predefinidas

echo PHP_BINARY.'</br>';
echo PHP_BINARY_READ.'</br>';
echo PHP_OS.'</br>'; //sistema operativo
echo PHP_EXTENSION_DIR.'</br>'; //direccion del directorio donde están las extensiones de php
echo PHP_VERSION.'</br>'; //version de php utilizada
echo __LINE__.'</br>'; //en que linea se ejecuta este comando
echo __FILE__.'</br>'; //donde se encuentra este archivo
echo __FUNCTION__; //nombre de la funcion donde se ejecuta esta linea

?>