<?php

$frase = "PHP è divertente e potente";

$parole = explode(" ", $frase);

foreach ($parole as $parola) {
    echo $parola . "<br>";
}

?>