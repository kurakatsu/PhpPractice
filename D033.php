<?php
    $input = trim(fgets(STDIN));
    $num = explode(" ", $input);
    $s = $num[0];
    $t = $num[1];

    echo $s[0] . "." . $t[0]; 
?>
