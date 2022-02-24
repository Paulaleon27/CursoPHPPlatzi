<?php

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