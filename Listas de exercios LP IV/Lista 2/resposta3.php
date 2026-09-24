<?php 
    $valor = $_POST["valor"];

    if ($valor > 100) {
        $desconto = $valor * 15 / 100;
        $valor = $valor - $desconto;
    }

    echo "O valor do produto é $valor";
