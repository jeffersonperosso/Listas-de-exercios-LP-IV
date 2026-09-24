<?php 
    $palavra1 = $_POST["palavra1"];
    $palavra2 = $_POST["palavra2"];

    if (strpos($palavra1, $palavra2))
        echo "A segunda palavra está contida na primeira";
    else
        echo "A segunda palavra não está contida na primeira";
