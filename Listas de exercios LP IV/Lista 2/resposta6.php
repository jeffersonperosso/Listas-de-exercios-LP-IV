<?php 
    $numero = $_POST["numero"];
    $i = 1;
    $soma = 0;

    while ($i <= $numero) {
        $soma = $soma + $i;
        $i++;
    }
    echo "A soma é $soma";
