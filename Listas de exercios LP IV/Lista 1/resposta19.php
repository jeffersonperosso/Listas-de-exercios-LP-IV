<?php 
    $distancia = $_POST["distancia"];
    $tempo = $_POST["tempo"];
    $velocidade = $distancia / $tempo;

    echo "A velocidade média é $velocidade";
