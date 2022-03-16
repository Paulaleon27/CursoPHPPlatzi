<?php

/*Dibuja medio arbol de navidad usando sólo asteriscos.
	- La altura debe ser dinámica, si le dices qu tendrá 10 de alto, entonces tendrá 10 asteriscos.
	Tip: Usa un ciclo para realizar esta actividad*/

    function asterisco($asterisco){
        for($i = 0; $i < $asterisco; $i++){
            echo str_repeat("*", $i) ."\n";
        }
    }

    $asterisco = 10;
    asterisco($asterisco);

?>