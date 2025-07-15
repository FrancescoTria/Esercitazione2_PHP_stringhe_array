<?php

$array1 = array("Luca", "Mario", "Giovanni", "Matteo", "Francesco");
$array2 = array("1", "2", "3", "4", "5");

echo "Array 1: <br>";
foreach ($array1 as $elemento) {
    echo $elemento . "<br>";
}
echo "<br> <br> Array 2: <br>";
foreach ($array2 as $elemento) {
    echo $elemento . "<br>";
}
echo "<br> <br> Array 3: <br>";
$array3 = array_merge($array1, $array2);
foreach ($array3 as $elemento) {
    echo $elemento . "<br>";
}

?>