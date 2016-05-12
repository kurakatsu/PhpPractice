<?php
$input = trim(fgets(STDIN));
$num = explode(" ", $input);
$m = $num[0];
$n = $num[1];
    echo (int)($m / $n) . " " . $m % $n;
?>
