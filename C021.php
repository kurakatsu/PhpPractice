<?php
$storm = explode(" ", trim(fgets(STDIN)));
$n = trim(fgets(STDIN));
$point = array();
for($i=0; $i<$n; $i++){
    $point[$i] = explode(" ", trim(fgets(STDIN)));
}
$r_1 = $storm[2] * $storm[2];
$r_2 = $storm[3] * $storm[3];
foreach($point as $value){
    $x = pow(($value[0] - $storm[0]), 2);
    $y = pow(($value[1] - $storm[1]), 2);
    if($r_1<=$x+$y && $x+$y<=$r_2){
        echo "yes\n";
    }else{
        echo "no\n";
    }
}
?>
