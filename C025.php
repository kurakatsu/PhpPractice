<?php
$M = trim(fgets(STDIN));
$N = trim(fgets(STDIN));
$fax = array();
for($i=0; $i<$N; $i++){
    $fax[$i] = explode(" ", trim(fgets(STDIN)));
}
$value_v = 0;
$sum = 0;
$SUM = 0;
foreach($fax as $value){
    if($value[0] > $value_v){
        $SUM = $SUM + ceil($sum/$M);
        $sum = 0;
    }
    //時計は0時から23時まで
    for($j=0; $j<=23; $j++){
        if($value[0]==$j && $value[1]<=59 && 0<=$value[1]){
            $sum = $sum + $value[2];
            $value_v = $value[0];
        }
    }
}
$SUM = $SUM + ceil($sum/$M);
echo $SUM;
?>
