<?php 
    $palavra = $_POST["palavra"];
    $invertida = strrev($palavra);

    echo "Palavra invertida: $invertida";
