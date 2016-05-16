<?php
$input = trim(fgets(STDIN));
$N = array();
for($i=0; $i<$input; $i++){
    $N[$i] = trim(fgets(STDIN));
}

foreach($N as $value){
    $sum = 0;
    for($j=1; $j<$value; $j++){
        if($value % $j == 0){
            $sum = $sum + $j;
        }
    }
    if($sum == $value){
        echo "perfect\n";
    }elseif(abs($value-$sum) == 1){
        echo "nearly\n";
    }else{
        echo "neither\n";
    }
}
?>
