<?php

// libreria stefangabos zebra_pagination

    require_once "../vendor/autoload.php";

    // Conexion a la base de datos
    $conexion = new mysqli("localhost","pma","","notas_master");
    $conexion->query("SET NAMES 'utf8'");

    //Consulta a la base de datos para contar elementos
    $consulta = $conexion->query("SELECT COUNT(id) as 'total' FROM notas");
    $num_elementos =$consulta->fetch_object()->total;
    $num_elementos_pagina=2;

    // hacer paginacion
    $paginacion = new Zebra_Pagination();

    // numero total de elementos a paginar
    $paginacion->records($num_elementos);

    //Numero de elementos por pagina
    $paginacion->records_per_page($num_elementos_pagina);

    $start=($page-1)*$num_elementos_pagina;
    //evita usar operaciones en las consultas sql directamente
    $notas = $conexion->query("SELECT * FROM notas LIMIT ($start,$num_elementos_pagina");

    //añadimos estilos css definidos en la libreria
    echo "<link reel='stylesheet' href='../vendedor/stefangabos/zebra_pagination/public/css/zebra_pagination.css' type='text/css'>";
    
    while ($nota = $notas->fetch_object()){
        echo"<h1> {$nota->titulo} </h1>"; 
        echo"<h3> {$nota->descripcion} </h3> </hr>"; 
    }

    $paginacion->render(); //saca los links de las paginas en la paginacion
?>