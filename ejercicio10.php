<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio10.php" method="post">
        valor A:
        <input name="valueA" type="text">
        valor b:
        <input name="valueB" type="text">
        <select name="select" id="">
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="multi">*</option>
            <option value="divi">/</option>
        </select>
        <input type="submit" value="sumar">

    </form>
</body>
</html>

<?php

if($_POST){
    $valorA= $_POST['valueA'];
    $valorB= $_POST['valueB'];

    if(($valorA > $valorB) && ($valorA != $valorB)){
        echo 'valor A es diferente de B y tambien es mayor';
    }

}

?>