<?php

/*
 Desarrolle un algoritmo que permita leer un valor entero positivo N y 
 determinar si es primo o no.
*/

// $numero1 = 10;
// $numero2 = 8;

// // forma 1
// if ($numero1 > $numero2) {
//     return true;
// } else {
//     return false;
// }

// // forma 2
// return !($numero1 > $numero2);

/**
 * Función para validar si un número es primo
 */
function hallarNumeroPrimo ($numero_verificar) {

    if ($numero_verificar >= 8) {

        return !($numero_verificar%2 == 0 || $numero_verificar%3 == 0 ||
               $numero_verificar%5 == 0 || $numero_verificar%7 == 0);

    } else {

        return $numero_verificar == 1 || $numero_verificar == 2 ||
               $numero_verificar == 3 || $numero_verificar == 5 ||
               $numero_verificar == 7;  
    }
}

$resultado = hallarNumeroPrimo(33);

if ($resultado) {
    echo 'El número es primo';
} else {
    echo 'El número no es primo';
}

?>