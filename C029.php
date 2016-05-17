<?php
$N = explode(" ", trim(fgets(STDIN)));
$day = array();
for($i=0; $i<$N[0]; $i++){
    $day[$i] = explode(" ", trim(fgets(STDIN)));
}
$s = 0;
$rain_array;
while($N[1]+$s <= $N[0]){
    for($j1=0; $j1<$N[0]-$N[1]+1; $j1++){
        $sum = 0;
        for($j2=$s; $j2<$N[1]+$s; $j2++){
            $sum = $sum + $day[$j2][1];
        }
    $ave = $sum/$N[1];
    $s++;
    $rain_array[$j1] = $ave;
    }
}
$min = min($rain_array);
$rain_key = array_search($min, $rain_array);
echo $day[$rain_key][0]. " ";
echo $day[$rain_key + $N[1] - 1][0];
?>
