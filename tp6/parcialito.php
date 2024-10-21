<?php
 


echo "bienvenidos. desea agendar un turno?(si/no)";

$respuesta = trim(fgets(STDIN));

$menorEdad = 9999;
$totalMascotas = 0;
$totalCompeticion = 0;
$totalGranja = 0;
while($respuesta == "si"){

    echo "ingrese el nombre del dueño";
    $nombreDueño = trim(fgets(STDIN));
    echo"ingrese edad del animal";
    $edadAnimal = trim(fgets(STDIN));
    echo "Tipo de animal: 'm' mascota, 'c' competicion o 'g' granja";
    $tipoAnimal = trim(fgets(STDIN));

    if($tipoAnimal = "m" && $edadAnimal < $menorEdad){
        $menorEdad = $edadAnimal;
        $nombreDueñoMenor = $nombreDueño;
    }

    if ($tipoAnimal = "m"){
        $totalMascotas = $totalMascotas + 1;
    }
    else if ($tipoAnimal = "c"){
        $totalCompeticion = $totalCompeticion + 1;
    }
    else if ($tipoAnimal = "g"){
        $totalGranja = $totalGranja + 1;
    }
    else {
        echo "no se ingresaron animales";
    }

    $totalAnimales = $totalMascotas + $totalCompeticion + $totalGranja;

    echo "desea agregar otro animal?(si/no)";
    $respuesta = trim(fgets(STDIN));
}

echo "el nombre del dueño de la mascota menor es " . $nombreDueñoMenor . " y el total de animales es: " . $totalAnimales;

