/*

Crear tablas

Es importante que cada fila o variable lleve especificada el tipo de dato que va a almacenar; por ejemplo:

    · int (nº de cifras) -> Entero (maximo de 4294967295 numeros)
        · tinyint -> (maximo de 255 numeros)
        · MEDIUMINT
        · LONGINT
    · integer (nº de cifras) -> Entero (maximo de 4294967295 numeros)
    · varchar(nº de caracteres) -> STRING/ALFANUMERICO (maximo de 255 carácteres)
    . char () -> STRING/ALFANUMERICO (maximo de 255 carácteres)
        · TEXT (maximo de 63535 carácteres)
        · MEDIUMTEXT -> (maximo de 16·10⁶ carácteres)
        · LONGTEXT -> (maximo de 16·10⁹ carácteres)
    · float (nº de cifras, nº de decimales) -> DECIMAL
    · date, time, timestamp

*/

/* Definir una tabla */

CREATE TABLE usuarios(
    id  INT(11) AUTO_INCREMENT NOT NULL,
    nombre  VARCHAR(100) NOT NULL,
    apellidos   VARCHAR(255) DEFAULT 'hola, que tal',
    email   VARCHAR(100) NOT NULL,
    password    VARCHAR(255),
    CONSTRAINT pk_usuarios PRIMARY KEY (id)
);