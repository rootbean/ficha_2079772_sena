<?php

/*
Hallar el promedio de tres notas de un estudiante
*/

function promedioNotas ($nota1, $nota2, $nota3) {

    $suma_notas = $nota1 + $nota2 + $nota3;
    $promedio_notas = $suma_notas / 3;

    return $promedio_notas;

}


$resultado_notas_estudiante1 = promedioNotas(4,3,4);
echo "El promedio de notas es: $resultado_notas_estudiante1";

echo '<br>';

$resultado_notas_estudiante2 = promedioNotas(5,4,4);
echo "El promedio de notas es: $resultado_notas_estudiante2";


?>


