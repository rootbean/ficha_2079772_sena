<?php

/*
Determinar la hipotenusa de un triángulo rectángulo conocidas las longitudes de sus dos catetos.
*/

// hipotenusa = raiz(cateto1 2 + cateto2 2);

$cateto1 = 5;
$cateto2 = 10;

// sqrt = hallar la raiz
// pow = potencia
// hypot = Hallar la hipotenusa

// Forma 1
$hipotenusa1 = sqrt($cateto1 * $cateto1 + $cateto2 * $cateto2);

// Forma 2

$hipotenusa2 = sqrt(pow($cateto1, 2) + pow($cateto2, 2));

// Forma 3
$hipotenusa3 = hypot($cateto1, $cateto2);


echo 'La hipotenusa 1 es: '.$hipotenusa1;
echo '<br>';
echo 'La hipotenusa 2 es: '.$hipotenusa2;
echo '<br>';
echo 'La hipotenusa 3 es: '.$hipotenusa3;







?>