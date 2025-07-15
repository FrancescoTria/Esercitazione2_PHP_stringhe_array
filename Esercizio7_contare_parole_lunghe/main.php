<?php

$array = array("php", "html", "css", "javascript", "sql", "java", "python", "c++", "c#", "ruby", "swift", "kotlin", "go", "rust", "php", "html", "css", "javascript", "sql", "java", "python", "c++", "c#", "ruby", "swift", "kotlin", "go", "rust");

$lunghezza = 5;

echo "Le parole più lunghe di " . $lunghezza . " caratteri sono: <br>";
foreach ($array as $parola) {
    if (strlen($parola) > $lunghezza) {
        echo $parola . "<br>";
    }
}
echo "<br> <br> Le parole più corte di " . $lunghezza . " caratteri sono: <br>";
foreach ($array as $parola) {
    if (strlen($parola) < $lunghezza) {
        echo $parola . "<br>";
    }
}

?>