<?php
$N = explode(" ", trim(fgets(STDIN)));
$M = array();
for($i=0; $i<$N[1]; $i++){
    $M[$i] = explode(" ", trim(fgets(STDIN)));
}
$SUM = 0;
foreach($M as $value){
    $sum = 0;
    for($i=0; $i<$N[0]; $i++){
        $sum = $sum + $value[$i];
    }
    if($sum > 0){
        $SUM = $SUM + $sum;
    }
}
echo $SUM;
?>
