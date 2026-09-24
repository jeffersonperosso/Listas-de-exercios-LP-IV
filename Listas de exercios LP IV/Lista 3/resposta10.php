<?php 
    $nome = $_POST["nome"];
    $nomes = explode(" ", $nome);

    foreach ($nomes as $nome) {
        if ($nome != "")
            echo strtoupper($nome[0]);
    }
