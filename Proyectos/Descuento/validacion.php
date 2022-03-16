<?php

/*En una tienda hay descuento del 35% en todos sus productos, 
	debes realizar una función que reciba el valor de cada producto y le reste
	el 35% para mostrar su valor original y en cuánto queda su nuevo valor a pagar*/ 

$prenda = array(1,2,3);
$valorPrenda = 0;
$porcentajeDescuento = 0.35;
$valorDescuento = 0;
$valorPrendaConDescuento = 0;
$valorTotalAPagar = 0;


for ($i=0; $i < count($prenda) ; $i++) {
    $valorPrenda = $_REQUEST["valor".$i];
    $valorDescuento = $valorPrenda * $porcentajeDescuento;
    $valorPrendaConDescuento = $valorPrenda - $valorDescuento; 
    $valorTotalAPagar = $valorTotalAPagar + $_REQUEST["valor".$i];
    echo "El valor de la prenda ". $i . " era $" . $valorPrenda . 
    ", aplicando el descuento queda en $". $valorPrendaConDescuento. "<br>";
}

echo "El valor total a pagar es :$" . $valorTotalAPagar;

?>