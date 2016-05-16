<?php
$n = trim(fgets(STDIN));
$order_a = array();
for($i=0; $i<$n; $i++){
    $order_a[$i] = explode(" ", trim(fgets(STDIN)));
}
$s_1 = 0;
$s_2 = 0;
foreach($order_a as $order){
    $num = 0;
    if($order[0] == "SET"){
        if($order[1] == 1){
            $s_1 = $order[2];
        }elseif($order[1] == 2){
            $s_2 = $order[2];
        }
    }elseif($order[0] == "ADD"){
        $num = $s_1;
        $s_1 = $s_1 + $order[1];
        $s_2 = $s_1;
        $s_1 = $num;
    }elseif($order[0] == "SUB"){
        $num = $s_1;
        $s_1 = $s_1 - $order[1];
        $s_2 = $s_1;
        $s_1 = $num;
    }
}
echo $s_1. " ". $s_2;
?>
