



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio13.php" method="post">
    <input type="submit" name="btn" value="1">
    <input type="submit" name="btn" value="2">
    <input type="submit" name="btn" value="3">
     
    </form>
</body>
</html>

<?php
    if($_POST){
        $buton="El boton presionado es el N° ";
        switch ($_POST['btn']) {
            case '1':
                    echo "$buton 1";
                break;
            case "2":
                    echo $buton."2";
                break;
            case '3':
                    echo $buton."3";
                break;
            default:
                    echo "no se han presionado botones correctos!";
                break;
        }
    }

?>