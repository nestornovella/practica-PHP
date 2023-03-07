


<?php
    $indice = 0;
    $valor=10;

    do{
        echo "<button>$indice</button>";
        $indice++;
    }while($indice < $valor);

   echo "<br/>";

    do{
        if($indice === $valor)$indice=0;
        echo "<button>$indice</button>";
        $indice++;
    }while($indice < $valor);


?>