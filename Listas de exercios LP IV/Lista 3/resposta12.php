<?php 
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $senha = "";

    for ($i = 0; $i < 8; $i++) {
        $senha = $senha . $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    echo "A senha gerada é: $senha";
