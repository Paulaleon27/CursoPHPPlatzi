<?php

$alto = array(1,2,3,4,5,6);
$ancho = array(1,2,3,4,5,6);
$form = "<form action='proceso.php'>";

for ($i=0; $i < count($alto) ; $i++) { 
    $form .= "Producto ". $i . ": ". 
    "Alto: " . "<input type='text' value='2' name='alto". $i . "'>" .
    " Ancho: " . "<input type='text' value='". $i . "' name='ancho". $i . "'>". "<br>";
}

 $button = "<button type='submit'>Ordenar</button>";
 $formCierre = "</form>";

echo $form.$button.$formCierre;

?>