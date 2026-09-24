<?php 
    $palavra = $_POST["palavra"];
    $maiusculo = strtoupper($palavra);
    $minusculo = strtolower($palavra);

    echo "Maiúsculo: $maiusculo<br>Minúsculo: $minusculo";
