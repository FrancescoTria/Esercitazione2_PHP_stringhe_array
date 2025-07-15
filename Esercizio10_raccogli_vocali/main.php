<?php

$stringa = "PHP è divertente e potente";

$parole = explode(" ", $stringa);

foreach ($parole as $parola) {
    echo "Parola: " . $parola . "<br>";
    $lettere = str_split($parola);
    foreach ($lettere as $lettera) {
        if (in_array($lettera, array("a", "e", "i", "o", "u"))) {
            echo "Volcale trovata: " . $lettera . "<br>";
        }
    }

}

?>