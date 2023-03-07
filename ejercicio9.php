

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio9.php" method="post">
        <input type="text" name="valor1">
        <input type="text" name="valor2">
        <button type="submit">enviar</button>
    </form>
    
</body>
</html>


<?php
    if($_POST){

        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];

        if($valor1 < $valor2){
            echo 'el valor 1 es mas pequeño';
        }else{
            echo 'el valor 2 es mas pequeño';
        }
    }


?>