<?php
/*Una compañía de ventas de carros usados, paga a su personal de ventas un salario de $1000 mensuales,
más una comisión de $150 por cada carro vendido, más el 5% del valor de la venta por carro.
cada mes el capturista de la empresa ingresa en la computadora los datos pertinentes.
hacer un programa que calcule e imprima el salario mensual de un vendedor dado.*/

$nombre_empleado = $_REQUEST["nombre_empleado"];
$horas_semana_1 = $_REQUEST["horas_semana_1"];
$horas_semana_2 = $_REQUEST["horas_semana_2"];
$horas_semana_3 = $_REQUEST["horas_semana_3"];
$horas_semana_4 = $_REQUEST["horas_semana_4"];
$salario_hora = $_REQUEST["salario_hora"];
$total_horas = 0;
$total_pago_mensual = 0;

$total_horas = $horas_semana_1 + $horas_semana_2 + $horas_semana_3 + 
                $horas_semana_4;
$total_pago_mensual = ($total_horas * $salario_hora);


echo "$nombre_empleado trabajó $total_horas horas: <br>";
echo "- El salario mensual es $$total_pago_mensual. <br>";


?>