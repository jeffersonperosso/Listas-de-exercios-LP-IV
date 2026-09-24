<?php 
    $email = $_POST["email"];
    $partes = explode("@", $email);

    $dominio = $partes[1];

    echo "O domínio do e-mail é $dominio";
