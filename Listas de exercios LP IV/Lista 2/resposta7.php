<?php 
    $numero = $_POST["numero"];

    do {
        echo "$numero<br>";
        $numero--;
    } while ($numero >= 1);
