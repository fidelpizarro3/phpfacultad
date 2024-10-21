<?php

$palabra = " ";
$oracion = " ";


while($palabra !== "."){

    echo "ingrese una palabra o un "." para finalizar ; ";

    $palabra = trim(fgets(STDIN));

    $oracion = $oracion . " " . $palabra;

} 
echo "la oracion es " . $oracion;