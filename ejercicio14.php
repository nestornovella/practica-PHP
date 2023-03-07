




<?php

echo "<h3>ciclo FOR</h3>";
for($i = 0; $i < 10; $i++){
    print_r("<button>F$i</button>");
}

echo "<hr/>";

echo "<h3>ciclo WHILE</h3>";

$i=0;
while($i < 10){
    echo "<button style={color:red}>W$i</button>";
    $i++;
}
$i=0;

?>