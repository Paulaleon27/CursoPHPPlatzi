<?php

/**
 * Hacer una aplicación que realice operaciones matemáticas
*/

$numero1 = $_REQUEST["numero1"];
$numero2 = $_REQUEST["numero2"];
$operacion = $_REQUEST["operacion"];
$total_operacion = 0;

switch ($operacion) {
    case 'suma':
        $total_operacion = $numero1 + $numero2;
        echo "El total de la $operacion es ". $total_operacion;
        break;
    case 'resta':
        $total_operacion = $numero1 - $numero2;
        echo "El total de la $operacion es ". $total_operacion;
        break;
    case 'multiplicacion':
        $total_operacion = $numero1 * $numero2;
        echo "El total de la $operacion es ". $total_operacion;
        break;
    case 'division':
        $total_operacion = $numero1 / $numero2;
        echo "El total de la $operacion es ". $total_operacion;
        break;
}


?>
