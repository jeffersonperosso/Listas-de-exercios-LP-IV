<?php 
    $numero = $_POST["numero"];

    $cima = ceil($numero);
    $baixo = floor($numero);
    $normal = round($numero);

    echo "Arredondado para cima: $cima<br>Arredondado para baixo: $baixo<br>Arredondado normalmente: $normal";
