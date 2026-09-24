<?php 
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $imc = $peso / ($altura ** 2);

    echo "O IMC é $imc";
