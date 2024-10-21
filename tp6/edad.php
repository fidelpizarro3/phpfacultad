<?php

$acumEdades = 0;

$j = 1;


do{
    echo "ingrese la edad del alumno" . $j . "\n";
    $edadAlumno = trim(fgets(STDIN));
    $acumEdades = $acumEdades + $edadAlumno;

    echo " desea continuar?(si/no)";
    $respuesta = trim(fgets(STDIN));
    if($respuesta == "si"){
        $j = $j + 1;
    }
}
while ($respuesta == "si");

echo "la edad promedio es " . ($acumEdades/ $j);