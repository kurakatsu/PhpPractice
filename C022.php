<?php
$n = trim(fgets(STDIN));
$array = array();
for($i=0; $i<$n; $i++){
    $input = explode(" ", trim(fgets(STDIN)));
    $array[$i] = $input;
}
echo $array[0][0] . " ";
echo $array[$n-1][1] . " ";
$max = array();
for($k=0; $k<$n; $k++){
    $max[$k] = $array[$k][2];
}
echo max($max) . " ";
$min = array();
for($k1=0; $k1<$n; $k1++){
    $min[$k1] = $array[$k1][3];
}
echo min($min) . "\n";
?>
