<?php 
    $palavra = $_POST["palavra"];
    $invertida = strrev($palavra);

    if ($palavra == $invertida)
        echo "$palavra é palíndromo";
    else
        echo "$palavra não é palíndromo";   
