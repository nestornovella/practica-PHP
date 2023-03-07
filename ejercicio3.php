<?php
    if($_POST){

        $nombre = $_POST['nombreText'];
        echo "hola ".$nombre;

    }
    if($_GET){
        print_r("hola2 ".$_GET["nombreText"]);
    }
    

?>