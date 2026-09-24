<?php 
    $largura = $_POST["largura"];
    $altura = $_POST["altura"];
    $perimetro = 2 * ($largura + $altura);

    echo "O perímetro do retângulo é $perimetro";
