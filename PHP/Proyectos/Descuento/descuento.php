<?php

/*En una tienda hay descuento del 35% en todos sus productos, 
	debes realizar una función que reciba el valor de cada producto y le reste
	el 35% para mostrar su valor original y en cuánto queda su nuevo valor a pagar*/ 

$prenda = array(1,2,3);
$form = "<form action='validacion.php'>";

for ($i=0; $i < count($prenda); $i++) { 
    $form .= "Valor prenda ". $i .
    "<input type='text' name='valor". $i . "'>" . "<br>" ;
}



$button = "<button type='submit'>Calcular Descuento</button>";
$formCierre = "</form>";

echo $form.$button.$formCierre;

?>