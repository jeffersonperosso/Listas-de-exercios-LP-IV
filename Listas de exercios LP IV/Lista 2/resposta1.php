<?php 
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $soma = $valor1 + $valor2;

    if ($valor1 == $valor2) {
        $soma = $soma * 3;
    }

    echo "O resultado é $soma";
