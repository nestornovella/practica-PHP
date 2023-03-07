

<?php
    if($_POST){
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        print_r('hola me llamo '.$name." ".$lastName);
    }

    if($_GET){
        $name = $_GET['name'];
        $lastNmae = $_GET['lastName'];
        print_r('hola me llamo '.$name." ".$lastName);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio5.php" method="post">
        Name:
        <input type="text" name="name" id="">
        Last Name:
        <input type="text" name="lastName" id="">
        <input type="submit" value="enviar">
    </form>
    
</body>
</html>