<?php

$hora = readline ("Ingrese la hora: ");
$minutos = readline ("Ingrese los minutos: ");
$segundos = readline ("Ingrese los segundos: ");

define ("HORA_EN_SEGUNDOS", 3600);
define ("MINUTO_EN_SEGUNDOS", 60);

$hora_a_segundos = ($hora * HORA_EN_SEGUNDOS);
$minutos_a_segundos = ($minutos * MINUTO_EN_SEGUNDOS);

$total_segundos = ($hora_a_segundos + $minutos_a_segundos + $segundos);

echo $total_segundos;

?>