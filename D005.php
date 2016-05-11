<?php
$input = trim(fgets(STDIN));
$num = explode(" ",$input);
$m = (int)$num[0];
$n = (int)$num[1];

for($i=1; $i<11; $i++){
    echo $m + (($i-1) * $n);
    if($i < 10){
        echo " ";
    }
}
?>
