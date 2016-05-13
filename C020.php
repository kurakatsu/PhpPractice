<?php
$input = explode(" ", trim(fgets(STDIN)));
$m = $input[0];
$p = $input[1];
$q = $input[2];
$m_1 = $m - ($m * ($p/100));
$m_2 = $m_1 - ($m_1 * ($q/100));
echo $m_2;
?>
