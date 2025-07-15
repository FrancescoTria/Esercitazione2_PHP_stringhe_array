<?php

$studenti = array(
    array("nome" => "Mario", "voto" => 23),
    array("nome" => "Giovanni", "voto" => 15),
    array("nome" => "Luca", "voto" => 12),
    array("nome" => "Matteo", "voto" => 10),
    array("nome" => "Francesco", "voto" => 18)
);

foreach ($studenti as $studente) {
    if ($studente["voto"] >= 18) {
        echo $studente["nome"] . " è passato con " . $studente["voto"] . "<br>";
    }
}

?>