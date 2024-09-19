<?php

// Crear una sesion que vaya aumentando su valor en 1 o disminuyendo en 1 en funcion de si el parametro GET"counter" está en 1 o en 0

session_start();

    if(!isset($_SESSION['counter'])){
        $_SESSION['counter']=0;
    }

    if( isset($_GET['counter']) && $_GET['counter']=="+"){
        $contador=1;
    } elseif ( isset($_GET['counter']) && $_GET['counter']=="-"){
        $contador=0;
    }

    if( isset($_GET['counter']) && $contador===1){
        $_SESSION['counter']++;
    } elseif ( isset($_GET['counter']) && $contador===0){
        $_SESSION['counter']--;
    }  

?>

<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">

    <input type="submit" value="+" name='counter'>
    <input type="submit" value="-" name='counter'>


</form>

<?php

    echo "Sesion : ".$_SESSION['counter'];

?>