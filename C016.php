<?php
$S = trim(fgets(STDIN));
$before = array('A', 'E', 'G', 'I', 'O', 'S', 'Z');
$after = array('4', '3', '6', '1', '0', '5', '2');
$Leet = str_replace($before, $after, $S);
echo $Leet;
?>
