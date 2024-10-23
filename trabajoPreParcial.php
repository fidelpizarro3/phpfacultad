<?php


/**
 * esta funcion tiene como parametro un numero y retorna un acumulador que suma 1 por numero impar de la cifra ingresada
 * @param int $num
 * @return int
 */


function obtenerImpar($num) {
    $acum = 0;
    while($num > 0) {
    $ultimoDigito = $num % 10;

            if($ultimoDigito % 2 != 0){
            $acum = $acum + 1;
            }

        $num= (int)($num/10);
    }
    return $acum;
}


//programa principal

echo "ingrese un numero: ";

$num = trim(fgets(STDIN));

echo "La cantidad de cifras impares es de " . obtenerImpar($num);

