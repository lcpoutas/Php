<form action="" method="get">
    <label for="numero">Introduce un numero</label>
    <input type="text" name="numero">

    <input type="submit" value="enviar">
</form>

<?php

if(isset($_GET['numero']) || is_numeric($_GET['numero'] || $_GET['numero']!="")){
    $numero=$_GET['numero'];

    for($i=$numero; $i<=100; $i++){
        echo $i."</br>";
    }

} else{
    echo "introduce un numero valido";
}  

?>

