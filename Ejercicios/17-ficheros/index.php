<?php

$archivo='archivo.txt';

//abrimos el archivo de texto
$fp = fopen($archivo, "a+"); //revisar los permisos de los archivos para que sean efectivos los distintos modos

/*

    Modos posibles en la funcion fopen

    mode	    Descripción

    'r'	        Apertura para sólo lectura; coloca el puntero al fichero al principio del fichero.

    'r+'	    Apertura para lectura y escritura; coloca el puntero al fichero al principio del fichero.

    'w'	        Apertura para sólo escritura; coloca el puntero al fichero al principio del fichero y trunca el fichero a 
                longitud cero. Si el fichero no existe se intenta crear.

    'w+'	    Apertura para lectura y escritura; coloca el puntero al fichero al principio del fichero y trunca el fichero 
                a longitud cero. Si el fichero no existe se intenta crear.

    'a'	        Apertura para sólo escritura; coloca el puntero del fichero al final del mismo. Si el fichero no existe, se 
                intenta crear. En este modo, fseek() solamente afecta a la posición de lectura; las lecturas siempre son pospuestas.

    'a+'	    Apertura para lectura y escritura; coloca el puntero del fichero al final del mismo. Si el fichero no existe, se intenta crear. 
                En este modo, fseek() no tiene efecto, las escrituras siempre son pospuestas.

    'x'	        Creación y apertura para sólo escritura; coloca el puntero del fichero al principio del mismo. Si el fichero ya existe, 
                la llamada a fopen() fallará devolviendo false y generando un error de nivel E_WARNING. Si el fichero no existe se intenta crear. 
                Esto es equivalente a especificar las banderas O_EXCL|O_CREAT para la llamada al sistema de open(2) subyacente.

    'x+'	    Creación y apertura para lectura y escritura; de otro modo tiene el mismo comportamiento que 'x'.

    'c'	        Abrir el fichero para sólo escritura. Si el fichero no existe, se crea. Si existe no es truncado (a diferencia de 'w'), ni la llamada 
                a esta función falla (como en el caso con 'x'). El puntero al fichero se posiciona en el principio del fichero. Esto puede ser útil 
                si se desea obtener un bloqueo asistido (véase flock()) antes de intentar modificar el fichero, ya que al usar 'w' se podría truncar 
                el fichero antes de haber obtenido el bloqueo (si se desea truncar el fichero, se puede usar ftruncate() después de solicitar el bloqueo).

    'c+'	    Abrir el fichero para lectura y escritura; de otro modo tiene el mismo comportamiento que 'c'.

    'e'	        Establecer la bandera 'close-on-exec' en el descriptor de fichero abierto. Disponible solamente en PHP compilado en sistemas que se 
                ajustan a POSIX.1-2008.

*/



//Leer el contenido
while(!feof($fp)){
    $contenido = fgets($fp);
    echo $contenido.'<br/>';
}

//Escribir contenido
fputs($fp, "esto lo he escrito desde index.php");

//cerramos el archivo de texto
fclose($fp);

// Copiar un fichero -> rename('fichero.txt', 'archivo-copiado.txt')

// Eliminar un archivo -> unlink('archivo-copiado.txt')

//Comprobar si existe un archivo

if(file_exists('fichero.txt')){
    echo 'el archivo existe';
} else{
    echo 'el archivo no existe';
}

?>