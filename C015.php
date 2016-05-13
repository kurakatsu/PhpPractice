<?php
$N = trim(fgets(STDIN));
$dp_array = array();
for($i=0; $i<$N; $i++){
    $num = explode(" ", trim(fgets(STDIN)));
    $dp_array[$i] = $num;
}
$sum = 0;
foreach($dp_array as $num){
        if($num[0] == 3 || $num[0] == 13 || $num[0] == 23 || $num[0] == 30 || $num[0] == 31){
            $sum = $sum + floor($num[1]/100*3);
        }elseif($num[0] == 5 || $num[0] == 15 || $num[0] == 25){
            $sum = $sum + floor($num[1]/100*5);
        }else{
            $sum = $sum + floor($num[1]/100);
        }
}
echo $sum;
?>
