<?php 
    $frase = $_POST["frase"];
    $palavras = explode(" ", trim($frase));
    $quantidade = count($palavras);
    $maiorPalavra = "";

    foreach ($palavras as $palavra) {
        if (strlen($palavra) > strlen($maiorPalavra))
            $maiorPalavra = $palavra;
    }

    echo "Número total de palavras: $quantidade<br>Maior palavra: $maiorPalavra";
