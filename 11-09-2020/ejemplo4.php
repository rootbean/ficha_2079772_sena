<?php

/*
Una empresa requiere un software para la gestión de nómina, que por medio
del salario de un empleado pueda verificar si tiene derecho al auxilio de 
transporte e imprima la información del empleado, salario, valor auxilio de
transporte y neto a pagar

    - Salario mínimo: $877.803
    - Aux de transporte: $ 102.854

    Nota: Tienen derecho al auxilio de transporte quienes tengan un salario igual
    o menor a dos salarios mínimos.

*/

$empleados = Array(2000000, 1500000, 900000, 1800000, 3000000);

$cantidad_empleados = count($empleados);
$salario_minimo = 877803;
$aux_transporte = 102854;

$salario_minimo_2 = $salario_minimo * 2;

echo 'Tiene derecho al auxilio de transporte: '.$salario_minimo_2;
echo '<br>';


for ($i = 0; $i < $cantidad_empleados; $i++) {

    $salario_empleado = $empleados[$i];
    $valor_pagar = 0;

    echo ' ------------------------------------------------------ ';
    echo '<br>';
    echo 'Salario empleado: $'.$salario_empleado;
    echo '<br>';

    if ($salario_empleado <= $salario_minimo_2) {
        echo 'Resultado: Tiene derecho al auxilio de transporte';
        echo '<br>';
        $valor_pagar = $salario_empleado + $aux_transporte;
    } else {
        echo 'Resultado: No tiene derecho al auxilio de transporte';
        echo '<br>';
        $valor_pagar = $salario_empleado;
    }

    echo 'Valor a pagar: $'.$valor_pagar;
    echo '<br>';

}



?>