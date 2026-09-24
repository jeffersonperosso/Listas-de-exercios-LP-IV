<?php 
    $valorA = $_POST["valorA"];
    $valorB = $_POST["valorB"];

    if ($valorA == $valorB) {
        echo "Números iguais: $valorA";
    } elseif ($valorA < $valorB) {
        echo "$valorA $valorB";
    } else {
        echo "$valorB $valorA";
    }
