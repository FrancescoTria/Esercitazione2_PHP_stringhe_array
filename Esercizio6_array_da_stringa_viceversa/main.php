<?php

$stringa = "html,css,php,js";

$array = explode(",", $stringa);
// explode è una funzione esclusiva per gli array quindi anche senza definire $ array è come se la stesse tipizzando

echo "Array originale: <br>";
foreach ($array as $elemento) {
    echo $elemento . " ";
}

$array[] = "sql";

echo "<br> <br> Array modificato: <br>";
foreach ($array as $elemento) {
    echo $elemento . " ";
}

?>