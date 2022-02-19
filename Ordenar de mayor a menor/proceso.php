<?php

/* MOSTRAR LOS DATOS */

//print_r($_REQUEST);

/* INICIALIZAR VARIABLES*/
$resultadoAltoPorAncho = [];
$cantRegistros = count($_REQUEST)/2;

/* INICIO BUCLE */
for ($i=0; $i < $cantRegistros; $i++) { 
    /* GUARDAR AL ALTO  Y EL ANCHO EN VARIABLES */
    $valorAlto = $_REQUEST['alto'.$i];
    $valorAncho = $_REQUEST['ancho'.$i];
    /* MULTIPLICAR EL ALTO POR EL ANCHO PARA OBTENER EL RESULTADO */
    /* GUARDAR TODOS LOS RESULTADOS */
    $resultadoAltoPorAncho[$i] = $_REQUEST['alto'.$i] * $_REQUEST['ancho'.$i];
}
/* FIN BUCLE */
/* ORDENAR DE MAYOR A MENOR LOS RESULTADOS*/
asort($resultadoAltoPorAncho);
print_r($resultadoAltoPorAncho);
/* MOSTRAR LOS RESULTADOS ORDENADOS*/

?>