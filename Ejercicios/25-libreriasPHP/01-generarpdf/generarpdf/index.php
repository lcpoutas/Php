<?php

//libreria spipu html2pdf

    require '../vendor/autoload.php';

    use Spipu\Html2Pdf\Html2Pdf; //llamamos a la libreria

    $html2pdf = new Html2Pdf(); //clase de la libreria para generar un objeto que nos dara el metod para generar pdf

    //conseguir el codigo html de un archivo

    ob_start();
    require_once "pdf_para_generar.php"; ///generamos la vista
    $html = ob_get_clean();

    $html2pdf->writeHTML($html); //genera el pdf

    $html2pdf->output('pdf_generado.pdf') //nombre del archivo pdf generado
?>