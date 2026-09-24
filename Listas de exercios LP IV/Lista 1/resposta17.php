<?php 
    $capital = $_POST["capital"];
    $taxa = $_POST["taxa"];
    $periodo = $_POST["periodo"];
    $montante = $capital * (1 + $taxa) ** $periodo;

    echo "O montante com juros compostos é $montante";
