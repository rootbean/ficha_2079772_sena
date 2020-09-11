<?php

/*
 Recorrer arreglos - arrays - matrices
*/

               //      0      1         2        3
$estudiantes = Array('Juan', 'Pedro', 'María', 'Mariana', 'Ruber', 'Laura');

$cantidad_estudiantes = count($estudiantes);

for ($i = 0; $i < $cantidad_estudiantes; $i++ ) {
    echo $estudiantes[$i];
    echo '<br>';
}


?>