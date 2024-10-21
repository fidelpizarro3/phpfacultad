<?php

function sumaDigitos($numero){
    $acum = 0;
        while($numero > 0){
            $digito = $numero % 10; 
            $acum = $acum + $digito;
            $numero = (int)($numero / 10);          
        }
        echo $acum;
}

sumaDigitos(53); 