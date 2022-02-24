<?php

    function asterisco($asterisco){
        for($i = 0; $i < $asterisco; $i++){
            echo str_repeat("*", $i) ."\n";
        }
    }

    $asterisco = 10;
    asterisco($asterisco);

?>