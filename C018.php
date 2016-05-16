<?php
$n = trim(fgets(STDIN));
$recipe = array();
for($i=0; $i<$n; $i++){
    $recipe[$i] = explode(" ", trim(fgets(STDIN)));
}
$m = trim(fgets(STDIN));
$mine = array();
for($j=0; $j<$m; $j++){
    $mine[$j] = explode(" ", trim(fgets(STDIN)));
}
$result = array();
$count = 0;
for($k1=0; $k1<$n; $k1++){
    for($k2=0; $k2<$m; $k2++){
        if($recipe[$k1][0] == $mine[$k2][0]){
            if($recipe[$k1][1] <= $mine[$k2][1]){
                $result[$k1] = floor((int)$mine[$k2][1] / (int)$recipe[$k1][1]);
                $count++;
            }
        }
    }
}
if($count == $n){
    echo min($result);
}else{
    echo "0";
}
?>
