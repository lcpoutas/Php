<?PHP

// Conectar a la base de datos - usando una biblioteca de php

$host='localhost';
$user='pma';
$password="";
$database='phpmysql';

$conexion= mysqli_connect($host, $user,$password, $database );

//comprobar si la conexion es correcta

if(mysqli_connect_errno()){
    echo "La conexion a la base de datos SQL ha fallado"."<br/>";
    echo mysqli_connect_error();
} else{
    echo "la conexion se ha realizado correctamente"."<br/>";
}

//Realizar consultas a la base de datos

//Consulta para configurar la codificación de caracteres

mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta select desde php

$query = mysqli_query($conexion, "SELECT * FROM notas");

while($nota=mysqli_fetch_assoc($query)){
    var_dump($nota);
    echo "<br/>";
}

// Insertar en la base de datos desde PHP

$sql = "INSERT INTO notas VALUES(null, 'Nota desde php', 'Esto es una nota desde PHP', 'green')";
$insert = mysqli_query($conexion, $sql);

if($insert){
    echo "Datos agregados correctamente";
} else{
    echo "Error: ".mysqli_error($conexion);
}

?>