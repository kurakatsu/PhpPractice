<?php
$N = explode(" ", trim(fgets(STDIN)));
$o_y = $N[0];
$s = $N[1];
$angle = $N[2];
$M = explode(" ", trim(fgets(STDIN)));
$x = $M[0];
$y = $M[1];
$target = $M[2];

$f1 = $o_y + $x*tan(deg2rad($angle));
$f2 = (9.8*pow($x, 2))/(2*pow($s, 2)*pow(cos(deg2rad($angle)), 2));
$point = $f1 - $f2;
if(abs($y - $point) <= $target/2-0.05){
    echo "Hit". " ". round(abs($y-$point), 1);
}else{
    echo "Miss";
}
?>
