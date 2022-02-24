<?php

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