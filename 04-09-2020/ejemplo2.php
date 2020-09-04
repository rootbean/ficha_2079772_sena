<?php

/*
 Desarrolle un algoritmo que permita leer un valor entero positivo N y 
 determinar si es primo o no.
*/

/**
 * Función para validar si un número es primo
 */
function hallarNumeroPrimo ($numero_verificar) {

    if ($numero_verificar >= 8) {

        if (
            $numero_verificar%2 == 0 ||
            $numero_verificar%3 == 0 ||
            $numero_verificar%5 == 0 ||
            $numero_verificar%7 == 0
        ) {
            return false;
            // echo 'No es número primo: '.$numero_verificar;
        } else {
            return true;
            // echo 'Es un número primo: '.$numero_verificar;
        }

    } else {
        if (
            $numero_verificar == 1 ||
            $numero_verificar == 2 ||
            $numero_verificar == 3 ||
            $numero_verificar == 5 ||
            $numero_verificar == 7  
        ) {
            return true;
            // echo 'Es un número primo: '.$numero_verificar;
        } else {
            return false;
            // echo 'No es número primo: '.$numero_verificar;
        }
    }
}

$resultado = hallarNumeroPrimo(6);

if ($resultado) {
    echo 'El número es primo';
} else {
    echo 'El número no es primo';
}

?>