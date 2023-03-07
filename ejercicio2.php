<?php

    if($_POST){
        $value = 'txtName';
        $nombre = $_POST[$value];
        print_r('hola '.$_POST[$value]);

    }



?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio2.php" method="post">
    <label for="">name:</label>
    <input type="text" name="txtName" id="">
    <input type="submit" value="enviar">


    </form>
    
</body>
</html>