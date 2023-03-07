


<?php

echo "<link rel='stylesheet' type='text/css' href='./styles.css'>";
$personas = array("nestor", "gaston", "luis"); // es un array

array_push($personas, "gonzalo"); //es como el push()

function numeroAleatorio(){
    $numero = rand(1, 30);
    return $numero;
}


$valores = implode("-", $personas)."<br/>"; // es como el split()

echo $valores;
$botones = array();



for($i = 0; $i < 4; $i++){
    $value =  $personas[$i];
    array_push($botones, "<button class='botton'> $value</button></div>");
}
$botonScaped = join("",$botones);

print_r("<div class='containerButons'>$botonScaped</div>");


$numerico = array(1, 2, 3);

function saluda ($name){
    return <"hola $name";
}

$saludados = array_map("saluda", $personas);

for($i = 0; $i < count($saludados); $i++){
    echo "<h3>$saludados[$i]</h3>";
};


?>