<?php
    //arrays asociativos! son como objetos


    $persona = array("nombre"=>"Nestor", "edad"=> 32, "genero"=>"Masculino", "id"=>"HrtF456") ;

    function imprime ($property){


        echo $property." ";
    }

    array_map("imprime",$persona);

?>