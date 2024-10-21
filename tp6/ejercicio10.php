<?php


echo "ingrese un numero x: ";

$x = trim(fgets(STDIN));

echo "desea ingresar un numero a la secuencia?(s/n)";

$eleccion = trim(fgets(STDIN));

$acum = 0;

if ($eleccion == "n"){
    echo "NO SE INGRESARON NUMEROS";
}

else{
while ($eleccion == "s"){
    echo "ingrese un numero";

    $nro = trim(fgets(STDIN));

    $esMultiplo = 0;

    $acum = $acum + 1;

    if ($nro % $x == 0){
        $esMultiplo = $esMultiplo + 1;
    }

    $porcentaje = ($acum * $esMultiplo) / 100;

    echo "desea ingresar otro numero? (s/n)";

    $eleccion = trim(fgets(STDIN));
}
echo "se ingresaron " . $acum .  " numeros  y el porcentaje de numeros multiplos es " . $porcentaje;
}


