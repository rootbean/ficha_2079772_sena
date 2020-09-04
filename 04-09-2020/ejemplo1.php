<?php

/*
 Desarrolle un algoritmo que permita leer un valor entero positivo N y 
 determinar si es primo o no.


 || - O  => Con una de las condiciones que sea V el resultado es V
 && - Y  => Todas las condiciones deben ser V para que el resultado sea V

*/

function hallarNumeroPrimo ($numero_verificar) {

    if ($numero_verificar >= 8) {

        if (
            $numero_verificar%2 == 0 ||
            $numero_verificar%3 == 0 ||
            $numero_verificar%5 == 0 ||
            $numero_verificar%7 == 0
        ) {
            echo 'No es número primo: '.$numero_verificar;
        } else {
            echo 'Es un número primo: '.$numero_verificar;
        }

    } else {
        if (
            $numero_verificar == 1 ||
            $numero_verificar == 2 ||
            $numero_verificar == 3 ||
            $numero_verificar == 5 ||
            $numero_verificar == 7  
        ) {
            echo 'Es un número primo: '.$numero_verificar;
        } else {
            echo 'No es número primo: '.$numero_verificar;
        }
    }
 
}

hallarNumeroPrimo(28);














?>