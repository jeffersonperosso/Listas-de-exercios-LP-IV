<?php 
    $dias = $_POST["dias"];
    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;

    echo "Horas: $horas<br>";
    echo "Minutos: $minutos<br>";
    echo "Segundos: $segundos";
