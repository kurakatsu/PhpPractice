<?php
$input = explode(" ", trim(fgets(STDIN)));
$a = $input[0];
$b = $input[1];
$n = trim(fgets(STDIN));
$sub_array = array();
for($i=0; $i<$n; $i++){
    $sub = explode(" ", trim(fgets(STDIN)));
    $sub_array[$i] = $sub;
}
for($j=0; $j<$n; $j++){
    if($a > $sub_array[$j][0]){
        echo "High\n";
    }elseif($a < $sub_array[$j][0]){
        echo "Low\n";
    }else{
        if($b > $sub_array[$j][1]){
            echo "Low\n";
        }else{
            echo "High\n";
        }
    }
}
