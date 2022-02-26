<?php

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