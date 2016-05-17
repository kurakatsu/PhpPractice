<?php
$H = exploed(" ", trim(fgets(STDIN)));
$BW = array();
for($i=0; $i<$H[0], $i++){
    $BW = explode(" ", trim(fgets(STDIN)));
}
foreach($BW as $value){
    for($j=0; $j<$H[1]; $j++){
        if(0 <= $value[$j] && $value[$j] <= 127){
            echo 0. " ";
        }elseif(128 <= $value[$j] && $value[$j] <= 255){
            echo 1. " ";
        }
    }
    echo "\n";
}
?>
