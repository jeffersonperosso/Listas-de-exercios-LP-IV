<?php 
    $capital = $_POST["capital"];
    $taxa = $_POST["taxa"];
    $periodo = $_POST["periodo"];
    $juros = $capital * $taxa * $periodo;

    echo "O valor dos juros simples é $juros";
