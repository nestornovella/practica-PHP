<?php

    $nombre = "Nestor Novella";
    echo strtoupper($nombre); // convierte tecto en mayusconla
    echo strtolower($nombre); //convierte el texto en minusculas


    function capitalize ($name){

        $sos = strtoupper($name[0]).substr($name, 1);//substr indica desde donde y hasta donde se requiere de una cadena de texto!     
        return "<br/>".$sos;
    };


    echo capitalize($nombre);
?>