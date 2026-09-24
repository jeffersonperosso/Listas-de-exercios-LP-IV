<?php 
    $preco = $_POST["preco"];
    $desconto = $_POST["desconto"];
    $valorDesconto = $preco * $desconto / 100;
    $precoFinal = $preco - $valorDesconto;

    echo "O preço com desconto é $precoFinal";
