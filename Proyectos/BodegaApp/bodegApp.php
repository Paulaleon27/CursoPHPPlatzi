<?php

$edad = 5;


function edad($edad){
    $bodega_inf = "inferior";
    $bodega_med = "media";
    $bodega_alt = "alta";
    if($edad > 0 and $edad < 5){
        echo "El estudiante con ".$edad ." años de edad, tendrá sus juguetes en la parte " .$bodega_inf.  " de la bodeda";
    }else if($edad >=5 and $edad <=7){
        echo "El estudiante con ". $edad ." años de edad, tendrá sus juguetes en la parte ". $bodega_med . " de la bodega";
    }else if($edad > 7){
        echo "El estudiante con ". $edad . " años de edad, tendrá sus juguetes en la parte ". $bodega_alt . " de la bodega";
    }else if($edad == 0){
        echo "El estudiante no tiene registro de edad, tendrá sus juguetes en la bodega de al lado";
    }
}

edad($edad);

// $edad = 1;

// switch($edad){
//     case ($edad<5):
//         echo "El estudiante con edad ". $edad ." tendrá sus juguetes en la parte inferior de la bodega";
//     break;
// }

?>