<?php

/*Una compañía de ventas de carros usados, paga a su personal de ventas un salario de $1000 mensuales,
más una comisión de $150 por cada carro vendido, más el 5% del valor de la venta por carro.
cada mes el capturista de la empresa ingresa en la computadora los datos pertinentes.
hacer un programa que calcule e imprima el salario mensual de un vendedor dado.*/

$nombre_empleado = $_REQUEST["nombre_empleado"];
$carros_vendidos = $_REQUEST["carros_vendidos"];
$total_ventas = $_REQUEST["total_ventas"];
$salario_mensual = 1000;
$valor_comision_carro = 150;
$valor_comision_ventas = 0.05;
$total_comision_carro = 0;
$total_comision_ventas = 0;
$total_salario = 0;


$total_comision_carro = ($valor_comision_carro * $carros_vendidos);

$total_comision_ventas = ($valor_comision_ventas * $total_ventas);

$total_salario = ($salario_mensual + $total_comision_carro + $total_comision_ventas);

echo "$nombre_empleado vendió $carros_vendidos carros: <br> ";
echo "- Comisión por carro vendido $$total_comision_carro. <br>";
echo "- Comisión por ventas $$total_comision_ventas. <br>";
echo "TOTAL A PAGAR: $$total_salario.";


?>