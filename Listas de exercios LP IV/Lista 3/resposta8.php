<?php 
    $frase = strtolower($_POST["frase"]);
    $vogais = 0;

    for ($i = 0; $i < strlen($frase); $i++) {
        if ($frase[$i] == "a" || $frase[$i] == "e" || $frase[$i] == "i" || $frase[$i] == "o" || $frase[$i] == "u")
            $vogais++;
    }
    echo "A frase possui $vogais vogais";
