<?php

/*
Es una tarea o procedimiento independiente con un solo objetivo
*/

// Función para hallar la hipotenusa
function hallarHipotenusa ($cateto1, $cateto2) {
    $hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2));
    echo 'La hipotenusa es: '.$hipotenusa;
    echo '<br>';
}

hallarHipotenusa(2,3);
hallarHipotenusa(5,10);
hallarHipotenusa(4,6);
hallarHipotenusa(6,9);




?>