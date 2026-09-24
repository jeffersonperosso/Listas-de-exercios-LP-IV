<?php 
    $valor = $_POST["valor"];
    $valorFormatado = number_format($valor, 2, ",", ".");

    echo "R$ $valorFormatado";
