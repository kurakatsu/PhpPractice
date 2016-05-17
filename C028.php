<?php
$N = trim(fgets(STDIN));
$word = array();
for($i=0; $i<$N; $i++){
    $word[$i] = explode(" ", trim(fgets(STDIN)));
}
$sum = 0;
foreach($word as $w){
    $count = 0;
    if(strlen($w[0]) == strlen($w[1])){
        for($j=0; $j<strlen($w[0]); $j++){
            if(substr($w[0], $j, 1) == substr($w[1], $j, 1)){
                $count++;
            }
        }
        if($count == strlen($w[0])){
            $sum = $sum + 2;
        }elseif($count == strlen($w[0]) - 1){
            $sum = $sum + 1;
        }
    }
}
echo $sum;
?>
