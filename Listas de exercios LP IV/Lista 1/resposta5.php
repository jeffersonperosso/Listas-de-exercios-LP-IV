<?php 
    $celsius = $_POST["celsius"];
    $fahrenheit = ($celsius * 9 / 5) + 32;

    echo "A temperatura em Fahrenheit é $fahrenheit";
