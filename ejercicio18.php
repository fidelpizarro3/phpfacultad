<?php

/**
 * PROGRAMA PRINCIPAL
 * le solicita al usuario que ingrese la cantidad de veces que desea realizar la encuesta y le devuelve el calculo de cuantas encuestas se realizaron, le dice la cantidad de viviendas con menores de 18 años, el nombre de el jefe de familia que tiene mas menores en su hogar y el promedio de habitantes por vivienda
 *(ENTERO acum, acumMenores18, masMenores, totalHabitantes, cantHabitantes, cantMenor18)(STRING respuesta, nombreJH)
 */


echo "cuantas encuestas desea realizar? ";

$respuesta = trim(fgets(STDIN));

$acum = 0;
$acumMenores18 = 0;
$masMenores = 0;
$totalHabitantes = 0;
$JefeMasMenores = 0;
for($i = 0 ; $i < $respuesta; $i++){

    echo "ingrese el nombre del jefe de hogar: ";
    $nombreJH = trim(fgets(STDIN));
    echo "ingrese la cantidad de habitantes de la vivienda: ";
    $cantHabitantes = trim(fgets(STDIN));
    echo"ingrese la cantidad de personas menores de 18: ";
    $cantMenor18 = trim(fgets(STDIN));
    $acum = $acum + 1;

    $totalHabitantes = $totalHabitantes + $cantHabitantes;
    
        if ($cantMenor18 > 0){
            $acumMenores18 = $acumMenores18 + 1;
        }
        if ($cantMenor18 > $masMenores){
            $masMenores = $cantMenor18;
            $JefeMasMenores = $nombreJH;
        }
        echo "gracias por completar la encuesta \n";
}





echo "se realizaron " . $acum . " encuestas \n la cantidad de viviendas con menores es de " . $acumMenores18 . "\n el nombre de la persona con mas menores es " . $JefeMasMenores . " con " . $masMenores . " menores \n y el total promedio de habitantes por viviendas es de " . ($totalHabitantes/$acum) . " %";