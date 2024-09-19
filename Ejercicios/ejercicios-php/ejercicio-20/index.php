<?php

    //Utiliza la funcion filter_var para comprobar si el email que nos llega por la url es un mail valido

    function validar($mail){
        $validar = filter_var($mail, FILTER_VALIDATE_EMAIL);

        return $validar;
    }

?>

<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
    <label for="email">introduce tu email</label>
    <input type="text" name="email">

    <input type="submit" value="enviar">
</form>

<?php

    $email=$_GET['email'];

    $validar=validar($email);

    if(isset($_GET['email'])){
        if($validar){
            echo "el mail es correcto";
        } else{
            echo "el mail es incorrecto";
        }    
    }
   
?>