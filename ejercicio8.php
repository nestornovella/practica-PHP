


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
        valor A:
        <input name="valueA" type="text">
        valor b:
        <input name="valueB" type="text">
        <input type="submit" value="sumar">

    </form>
</body>
</html>

<?php
    if($_POST){
        define("valor1", $_POST['valueA']);
        define("valor2", $_POST['valueB']);
        echo 'Resultado '.valor1 + valor2;

    }


?>