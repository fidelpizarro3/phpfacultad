<?php


$letra = " " ;
$oracion = " ";

while ($letra != "-"){

    echo "ingrese una letra: (- para finalizar) ";
    
    $letra = trim(fgets(STDIN));

    echo "ingrese otra letra: (- para finalizar) ";

    $letra = trim(fgets(STDIN)); 

    $oracion = $oracion + $letra;
}

echo "su oracion dice " . $oracion;