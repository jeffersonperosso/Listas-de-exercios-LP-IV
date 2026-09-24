<?php 
    $frase = $_POST["frase"];
    $semEspacosExtras = trim($frase);
    $semEspacos = str_replace(" ", "", $frase);

    echo "Frase original: $frase<br>";
    echo "Sem espaços extras no início e no final: $semEspacosExtras<br>";
    echo "Com todos os espaços removidos: $semEspacos";
