<?php

print_r($_REQUEST);

$alto = array(1,2,3,4,5,6);
$ancho = array(1,2,3,4,5,6);
$calculoAnchoAlto = 0;
$totalMedida = 0;

for ($i=0; $i < count($alto); $i++) {
        $valorAltura = $_REQUEST["alto".$i];
        $valorAncho = $_REQUEST["ancho".$i];
        $calculoAnchoAlto = $valorAltura * $valorAncho;    

        $ordenar = array();
        for($contador = 0; $contador <= count($alto) ; $contador++){
            $ordenar[$contador] = $calculoAnchoAlto;
        }
        print_r($ordenar);
        
        foreach($ordenar as $ordenarr){
            
            echo "ESTE ES EL VALOR DE ORDENAR: " . $ordenarr . "<br>";
        }

        asort($ordenar);
}




?>