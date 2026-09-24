<?php 
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $ano = $_POST["ano"];

    if (checkdate($mes, $dia, $ano))
        echo "Data válida: " . sprintf("%02d/%02d/%04d", $dia, $mes, $ano);
    else
        echo "Data inválida";
