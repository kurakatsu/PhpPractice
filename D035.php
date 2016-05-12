<?php
    $input = trim(fgets(STDIN));
    $num = explode(" ", $input);
    $y = $num[0];
    $m = $num[1];
    $d = $num[2];

        echo $y . "/" . $m . "/" . $d;
?>
