<?php

/*
Se requiere saber el valor a pagar a un empleado según los días laborados.
Imprimir el valor a cancelar.
*/

function hallarSalarioEmpleado ($nombre_empleado, $numero_documento, $salario_mensual, $dias_labor) {

  // salario mensual $1.000.000 por 30 dias de labor
  // dias laborados
  // resultado será el neto a pagar

    $valor_dia_trabajo = $salario_mensual / 30; // hallamos el valor del día
    $neto_pagar_empleado = $valor_dia_trabajo * $dias_labor;

    echo '---------------------------------';
    echo '<br>';
    echo "Nombre: $nombre_empleado <br>";
    echo "No. Documento: $numero_documento <br>";
    echo "Salario Mensual: $salario_mensual <br>";
    echo "Días laborados: $dias_labor <br>";
    echo "Salario a pagar: $neto_pagar_empleado <br>";
    echo '---------------------------------';
    echo '<br>';

}

hallarSalarioEmpleado('Ruber', '1111', 1200000, 20);
hallarSalarioEmpleado('Maria Ángel', '2222', 1400000, 30);
hallarSalarioEmpleado('Laura', '3333', 2000000, 15);















?>
