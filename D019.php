<?php
    $input = trim(fgets(STDIN));
    $num = explode(" ", $input);
    $s = $num[0];
    $n = $num[1];

    echo $s[$n-1];
?>
