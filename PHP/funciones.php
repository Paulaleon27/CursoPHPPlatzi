<?php


function concatenar($nombre, $apellido) {
    echo $nombre.' '.$apellido;
}

concatenar("Camila","Rojas");

function sumarNumeros($numeros){
    $suma = 0;
    for ($i=0; $i < 6; $i++){
        $suma = $suma + $numeros [$i];
    }
    echo " La suma de los valores del array es: ".$suma;
}

$numeros = array(1,3,7,1,3);
sumarNumeros($numeros);

?>