<?php


function obtenerValor($calidad,$gramos){

    if ($calidad == 1){
        $valor = 80 * $gramos;
    }
    else if ($calidad == 2){
        $valor = 120 * $gramos;
    }
    else if ($calidad == 3){
        $valor = 300 * $gramos;
    }
    else $valor = 0;

    return $valor;
}


$acumJoyas = 0.0;

while ($acumJoyas <200000){

    echo "ingrese los datos de la joya \n";
    echo "cual es la calidad de la joya?(1,2,3)";
    $calidadJoya = trim(fgets(STDIN));

    echo "cuantos gramos pesa la joya?";

    $pesoJoya = trim(fgets(STDIN));
    
    $valorJoya = obtenerValor($calidadJoya,$pesoJoya);

    $acumJoyas =$acumJoyas + $valorJoya; 
}

echo "el joyero pagara " . $acumJoyas . "$";